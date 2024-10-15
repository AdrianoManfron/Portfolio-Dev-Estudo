/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php', 'index.php'],
  theme: {
    extend: {
      fontFamily: {
        asap: ['Asap' ,'sans-serif'],
        inconsolata: ['Inconsolata' ,'monospace'],
        maven: ['Maven Pro' ,'sans-serif'],
      },
      fontSize: {
        title_lg: '56px',
        title_md: '24px',
        title_sm: '16px',
        subtitle: '20px',
        tag_md: '16px',
        tag_sm: '12px',
        text_md: '16px',
        text_sm: '14px',
      },
      colors: {
        red: '#E3646E',
        purple: '#BB72E9',
        blue: '#3996DB',
        green: '#82BC4F',
        yellow: '#EABD5F',
        'gray-100': '#0D0E11',
        'gray-200': '#16181D',
        'gray-300': '#292C34',
        'gray-400': '#878EA1',
        'gray-500': '#C0C4CE',
        'gray-600': '#E2E4E9',
      },
      backgroundImage: {
        'hero': "url('/assets/images/Background_Intro.png')",
        'contact': "url('/assets/images/Background_Contacts.png')",
      },
      maxWidth: {
        '1040': '1040px',
      }
    },
  },
  plugins: [],
}

