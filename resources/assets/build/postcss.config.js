/* eslint-disable */

const cssnanoConfig = {
    preset: ['default', { discardComments: { removeAll: true } }]
};

module.exports = (api) => {
    return {
        parser: api.options.ctx.enabled.optimize ? 'postcss-safe-parser' : undefined,
        plugins: {
            autoprefixer: true,
            cssnano: options.ctx.enabled.optimize ? cssnanoConfig : false,
        },
    };
};
