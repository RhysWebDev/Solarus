// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      screens: {
        sm: '768px',
        md: '1024px',
        lg: '1280px',
        xl: '1536px',
        '2xl': '1720px',
      },
      colors: {
        primary: '#EB9A03',
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};
