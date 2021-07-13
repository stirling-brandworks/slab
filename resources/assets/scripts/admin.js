/**
 * ACF JS Hooks
 *
 * @link https://www.advancedcustomfields.com/resources/javascript-api/
 */
if (window.acf && window.slabOptions) {
  window.acf.add_filter('color_picker_args', function (args) {
    args.palettes = window.slabOptions.colors.map((obj) => obj.color);
    return args;
  });
}
