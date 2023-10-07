/** @type {import('tailwindcss').Config} */
export default {
    // prettier-ignore
    content: [
      "./resources/**/*.blade.php", 
      "./resources/**/*.js", 
      "./resources/**/*.vue", 
      "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["night", "light"],
    },
};
