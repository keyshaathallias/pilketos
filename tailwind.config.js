/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ["Montserrat", "sans-serif"]
      },
      backgroundColor: {
        primary: "#1374D7",
        tertiary: "#1868B9",
        secondary: "#F6F6F6",
        success: "#198754",
      },
    },
  },
  plugins: [],
}

