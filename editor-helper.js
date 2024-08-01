/* ============================================ */
// グループのスタイル追加
/* ============================================ */

/*---------------------------------
 レイアウト
 ---------------------------------*/
// coreがデフォルトの指定
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
    name: "privateworks-paragraph",
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


/*---------------------------------
 イメージ周り
 ---------------------------------*/

wp.blocks.registerBlockStyle("core/group", {
    name: "pen0works-slick",
    label: "スライドショー",
    isDefault: false,
});