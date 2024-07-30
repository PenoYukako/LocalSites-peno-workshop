/* ============================================ */
// グループのスタイル追加
/* ============================================ */
// coreがデフォルトの指定
wp.blocks.registerBlockStyle("simple-definition-list-blocks/list", {
    name: "group-caption",
    label: "キャプション",
    isDefault: false,
});

wp.blocks.registerBlockStyle("core/paragraph", {
    name: "work-details",
    label: "作品詳細文ボックス",
    isDefault: false,
});


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
    name: "btn-gap",
    label: "ボタンマージンギャップ",
    isDefault: false,
});

wp.blocks.registerBlockStyle("core/group", {
    name: "pen0works-slick",
    label: "スライドショー",
    isDefault: false,
});