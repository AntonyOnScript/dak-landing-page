module.exports = {
  lintOnSave: false,
  assetsDir: "/assets",

  configureWebpack: {
    output: {
      filename: "js/index.js",
      chunkFilename: "js/index-chunk.js"
    }
  },

  chainWebpack: config => {
    if (config.plugins.has("extract-css")) {
      const extractCSSPlugin = config.plugin("extract-css");
      extractCSSPlugin &&
      extractCSSPlugin.tap(() => [
        {
          filename: "css/index.css",
          chunkFilename: "css/index-chunk.css"
        }
      ]);
    }

    config.plugins
        .delete("html")
        .delete("prefetch")
        .delete("preload");
  }
}
