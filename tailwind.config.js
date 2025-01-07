module.exports = {

  content: [
    './**/*.php', // Inclut tous les fichiers PHP
    './path/to/other/files/**/*.{html,js}', // Si vous avez d'autres fichiers
  ],
  theme: {

    extend: {
      colors: {
        'custom-gray': '#D0D5DD',
        'customblue': '#000AFF',
        'custom-dark': '#344054',
        charityYellow: '#FFB30E',
        },
      },
    },
  },
}
