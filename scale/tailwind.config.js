/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'font':'Poppins'
      },
      boxShadow:{
        "head":"0px 0px 3px 0px rgba(0,0,0,.2)"
      },
      backgroundColor:{
        "mained":"#6c7ae0",
        "model":"rgb(102, 102, 102)"
      },
      textColor:{
        "mained":"#6c7ae0"
      },
      gridTemplateColumns:{
        'footer':"repeat(auto-fit,minmax(250px,1fr))",
        'mained':"repeat(auto-fit,minmax(350px,1fr))",
      },
    },
  },
  plugins: [],
}
