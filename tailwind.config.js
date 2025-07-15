/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    "./**/*.{php,html,js}"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#ff6f61',
        'primary-dark': '#ff3b2f',
        'secondary': '#2c3e50',
        'accent': '#3498db',
      },
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
      },
      boxShadow: {
        'custom': '0 4px 6px rgba(0, 0, 0, 0.1)',
      },
      backgroundImage: {
        'hero': "url('../image/bkg2.jpeg')",
      },
      animation: {
        'fade-in': 'fadeIn 0.5s ease-in-out',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
} 