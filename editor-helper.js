/* ============================================ */
// グループのスタイル追加
/* ============================================ */

/*---------------------------------
見出し
 ---------------------------------*/
wp.blocks.registerBlockStyle("core/heading", {
    name: "h2-heading",
    label: "H2見出し",
    isDefault: false,
});


/*---------------------------------
 レイアウト
 ---------------------------------*/
// 非公開実績
wp.blocks.registerBlockStyle("core/columns", {
    name: "privateworks-columns",
    label: "作品詳細カラム",
    isDefault: false,
});

wp.blocks.registerBlockStyle("core/column", {
    name: "privateworks-right-column",
    label: "右カラム",
    isDefault: false,
});

wp.blocks.registerBlockStyle("core/paragraph", {
    name: "detailedTx-paragraph",
    label: "詳細テキストボックス",
    isDefault: false,
});

wp.blocks.registerBlockStyle("simple-definition-list-blocks/list", {
    name: "group-caption",
    label: "キャプション",
    isDefault: false,
});

wp.blocks.registerBlockStyle("core/paragraph", {
    name: "privateworks-url",
    label: "URLテキスト",
    isDefault: false,
});


// 公開実績
wp.blocks.registerBlockStyle("core/group", {
    name: "works-group",
    label: "シングルレイアウト",
    isDefault: false,
});

/*---------------------------------
 ボタン周り
 ---------------------------------*/

wp.blocks.registerBlockStyle("core/button", {
    name: "return-btn",
    label: "戻るボタン",
    isDefault: false,
});

wp.blocks.registerBlockStyle("core/button", {
    name: "contact-btn",
    label: "コンタクトボタン",
    isDefault: false,
});

wp.blocks.registerBlockStyle("core/button", {
    name: "obl-btn",
    label: "外部リンクボタン",
    isDefault: false,
});

wp.blocks.registerBlockStyle("core/buttons", {
    name: "btn-box",
    label: "ボタンボックス",
    isDefault: false,
});

wp.blocks.registerBlockStyle("core/buttons", {
    name: "btn3-box",
    label: "3ボタンボックス",
    isDefault: false,
});


/*---------------------------------
 イメージ周り
 ---------------------------------*/

wp.blocks.registerBlockStyle("core/group", {
    name: "pen0works-slick",
    label: "スライドショー",
    isDefault: false,
});