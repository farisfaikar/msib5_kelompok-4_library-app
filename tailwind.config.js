import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"],
  theme: {
    extend: {
      fontFamily:{
        'jakarta-sans': ['Plus Jakarta Sans', 'sans-serif'],
      },
      animation:{
        'shake' : 'shake 1s ease-in-out infinite',
      },
      keyframes:{
        shake:{
          '0%, 100%' :{
            transform: 'rotate(-3deg)'
          },
          '50%' :{
            transform: 'rotate(3deg)'
          },
        },
      },
    },
  },
  plugins: [
    require("daisyui"),
    
  ],
  daisyui: {
    themes: ["light", "night"],
  },
};
