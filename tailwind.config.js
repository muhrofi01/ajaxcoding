/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        'blueYoungAjax' : '#5EE6EB',
        'yellowAjax' : '#F2FA5A',
        'blueAjax' : '#4D77FF',
        'blueNavAjax' : '#4253EF',
        'grayAjax' : '#F5F5F5',
        'blueformAjax' : '#56BBF1',
        'blueoldAjax' : '#0C4A6E'
      }
    },
  },
  plugins: [],
}
