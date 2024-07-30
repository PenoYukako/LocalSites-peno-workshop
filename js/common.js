// console.log('テスト2');

jQuery(function ($) {
// console.log('テスト');


  // クラスを一つずつ見て回ってる。
  $(".is-style-pen0works-slick").each(function (i) {
    // console.log($(this));
    // クラスを見つける
    // console.log(i);
    var slider = $(this).find(".slide");
    var tumbnails = $(this).find(".thumbnails");

    $(slider).on("init", function (event, slick) {
      //console.log('イベント：init');
      // .slideの後にHTMLを追加
      $(this).after('<div class="slick-num"><span class="now-count"></span> / <span class="all-count"></span></div>');
      // .slideの親(parent)から.now-countを探して処理
      $(this).parent().find(".now-count").text(slick.currentSlide + 1);
      // .slideの親(parent)から.all-countを探して処理
      $(this).parent().find(".all-count").text(slick.slideCount);
    }).slick({
      arrows: false,
      autoplay: false,
      asNavFor: tumbnails,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            arrows: true,
          },
        },
      ],
    }).on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      // console.log('イベント：beforeChange');
      // .slideの親(parent)から.now-countを探して処理
      $(this).parent().find(".now-count").text(nextSlide + 1);
    });

    $(tumbnails).slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: slider,
      arrows: false,
      dots: false,
      centerMode: false,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            centerMode: true,
            slidesToShow: 2,
          },
        },
      ],
    });





      // console.log($(this).find(".slide"));
      // 全体の枚数からみて現在のページ番号を反映している
      
    // .slick({
    //   arrow: true,
    //   autoplay: false,
    //   asNavFor: '.thumbnails'
    // });
    // $(this).find(".slide").on("init", function (event, slick) {
    //   $(this).append('<div class="slick-num"><span class="now-count"></span> / <span class="all-count"></span></div>');
    //   $(".now-count").text(slick.currentSlide + 1);
    //   $(".all-count").text(slick.slideCount);
    // });
    // $(this).find(".slide").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    //   $(".now-count").text(nextSlide + 1);
    // });
    
  });





  // $(".is-style-pen0works-slick")
  //   .on("init", function (event, slick) {
  //     $(this).append('<div class="slick-num"><span class="now-count"></span> / <span class="all-count"></span></div>');
  //     $(".now-count").text(slick.currentSlide + 1);
  //     $(".all-count").text(slick.slideCount);
  //   })
  //   .slick({
  //     arrow: true,
  //     autoplay: false,
  //     asNavFor: '.slider-nav'
  //   })
  //   .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
  //     $(".now-count").text(nextSlide + 1);
  //   });

  // クラスの中にspanを埋め込み
  $(".wp-block-button__link").wrapInner('<span></span>');

  $(".fas").addClass('position-fa-left');
}); 

// $('.slider-nav').slick({
//   slidesToShow: 4,
//   slidesToScroll: 1,
//   asNavFor: '.slickSlider',
//   arrows: false,
//   dots: false,
//   centerMode: true,
//   focusOnSelect: true,
//   responsive: [
//     {
//       breakpoint: 767,
//       settings: {
//         slidesToShow: 2,
//       },
//     },
//   ],

// });

