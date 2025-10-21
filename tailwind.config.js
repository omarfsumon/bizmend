/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    './*.php',
    './inc/**/*.php',
    './template-parts/**/*.php',
    './page/**/*.php',
    './src/**/*.js',
    './src/**/*.css',
  ],
  theme: {
    extend: {
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
        'onest': ['Onest', 'sans-serif'],
      },
      fontSize: {
        'base': ['16px', '1.8'],
        'lg': ['18px', '1.6'],
        'xl': ['20px', '1.5'],
        '1xl': ['22px', '1.2'],
        '2xl': ['24px', '1.4'],
        '3xl': ['30px', '1.3'],
        '4xl': ['36px', '1.3'],
        '5xl': ['48px', '1.2'],
        '6xl': ['60px', '1.1'],
        '4th-heading': 'clamp(1.375rem, 1.3138rem + 0.3061vw, 1.5625rem)',
        '3rd-heading': 'clamp(1.375rem, 1.2083rem + 0.8333vw, 1.875rem)',
        '2nd-heading': 'clamp(1.5625rem, 1.1801rem + 1.912vw, 2.8125rem)',
        'hero-heading': 'clamp(1.625rem, 0.875rem + 3.75vw, 4.0625rem)',
      },
      colors: {
        'bg-color': '#FDF7F2',
        'text-color': '#252525',
        
          'primary': {
            '50': '#ebfef7',
            '100': '#cefde9',
            '200': '#a1f9d8',
            '300': '#64f1c5',
            '400': '#27e0ad',
            '500': '#02cb9a',
            '600': '#00a27c',
            '700': '#008266',
            '800': '#006652',
            '900': '#005445',
            '950': '#002f28',
        },
        'secondary': {
            '50': '#fff8ec',
            '100': '#ffefd3',
            '200': '#ffdba5',
            '300': '#ffc16d',
            '400': '#ff9b32',
            '500': '#ff7d0a',
            '600': '#fe6300',
            '700': '#cc4702',
            '800': '#a1370b',
            '900': '#82300c',
            '950': '#461504',
        },
      },
      listStyleType: {
        square: 'square',
        roman: 'upper-roman',
        circle: 'circle',
        check: '"✓ "',
      },
    },
  },
  plugins: [
    require('@material-tailwind/html')
  ],
};