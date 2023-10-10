import ScrollHint from "scroll-hint";

new ScrollHint(".js-scrollable", {
  scrollHintIconAppendClass: "scroll-hint-icon-white", // white-icon will appear
  applyToParents: true,
  i18n: {
    scrollable: "スクロールできます",
  },
});
