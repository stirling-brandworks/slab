module.exports = {
  extends: ['stylelint-config-standard', 'stylelint-config-prettier'],
  rules: {
    'no-empty-source': null,
    'string-quotes': 'double',
    'at-rule-empty-line-before': [
      'always',
      {
        ignore: [
          'after-comment',
          'first-nested',
          'inside-block',
          'blockless-after-same-name-blockless',
          'blockless-after-blockless',
        ],
        ignoreAtRules: ['else', 'warn', 'if', 'error'],
      },
    ],
    'at-rule-no-unknown': [
      true,
      {
        ignoreAtRules: [
          'extend',
          'at-root',
          'debug',
          'warn',
          'error',
          'if',
          'else',
          'for',
          'each',
          'while',
          'mixin',
          'include',
          'content',
          'return',
          'function',
          'tailwind',
          'apply',
          'responsive',
          'variants',
          'screen',
        ],
      },
    ],
  },
};
