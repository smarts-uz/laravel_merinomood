const defaultTheme = require('tailwindcss/defaultTheme')
const {colors} = defaultTheme

module.exports = {
    purge: [],
    theme: {
      container: {
          center: true,
          padding: '3rem'
      },
      screens: {
          '2xl': '1600px',
          'xxl': {'max': '1450px'},
          'xl': {'max': '1382px'},
          'x': {'max': '1250px'},
          'lg': {'max': '1140px'},
          'l': {'max': '1000px'},
          'md': {'max': '912px'},
          'sm': {'max': '768px'},
          'xs': {'max': '600px'},
          '2xs': {'max': '480px'},
          '2sm': {'max': '430px'},
          '3xs': {'max': '400px'},
          's': {'max': '365px'},
        },
      rotate: {
          ...defaultTheme.rotate,
          '-35': '-35deg',
      },
      extend: {
          fontSize: {
              ...defaultTheme.fontSize,
              '1xl': '1.375rem'
          },
          inset: {
              ...defaultTheme.inset,
              '7': '1.75rem',
              '35/100': '35%',
              '36/100': '36%',
              '16/100': '16%',
              '1/2': '50%',
          },
          width: {
              ...defaultTheme.width,
              'max': 'max-content',
              '28': '6.5rem',
              '1/8': '12.5%',
              '12/100': '12%',
              '15/100': '15%',
              '19/100': '19%',
              '47/100': '47%',
              '53/100': '53%',
              '30/100': '30%',
              '35/100': '35%',
              '48/100': '48%',
              '65/100': '65%',
              '70/100': '70%',
              '85/100': '85%',
          },
          height: {
              ...defaultTheme.height,
              'max': 'max-content',
              '28': '6.5rem',
              '70/100': '70%',
          },
          maxWidth: {
              ...defaultTheme.maxWidth,
              '2xs': '16rem',
              '4/5': '80%',
              '11/12': '91.666667%',
          },
          maxHeight: {
              ...defaultTheme.maxHeight,
              'sm': '24rem'
          },
          spacing: {
              7: '1.75rem',
              9: '2.25rem',
              14: '3.5rem',
              18: '4.5rem',
              19: '4.75rem',
              22: '5.5rem',
              26: '6.5rem',
              36: '9rem',
              60: '15rem',
              72: '18rem',
              76: '19rem',
              80: '20rem',
              88: '22rem',
              96: '24rem',
              112: '28rem'
          },
          colors: {
              gray: {
                  ...colors.gray,
                  50: '#F9F9F9',
                  75: '#F5F5F5',
                  200: '#EEEEEE',
                  350: '#E1E1E1',
                  375: '#D9D9D9',
                  420: '#AFAFAF',
                  450: '#C4C4C4',
                  520: '#979797',
                  530: '#828282',
                  540: '#7B7B7B',
                  550: '#757575',
                  580: '#858585',
                  650: '#707070',
                  675: '#5E5E5E',
                  725: '#303030',
                  750: '#2F3036',
                  850: '#2A2A2E'
              },
              green: {
                  ...colors.green,
                  350: '#77AC60',
                  550: '#2A9B2A',
                  650: '#417D28',
              },
              red: {
                  ...colors.red,
                  250: '#FF8888',
                  550: '#C82F2F',
              },
              orange: {
                  ...colors.orange,
                  250: '#FFB36A',
                  350: '#F7AD66',
                  450: '#FF9A39',
              },
              blue: {
                  ...colors.blue,
                  450: '#2D2DFF',
              }
          }
      },
      fontSize:{
        ...defaultTheme.fontSize,
        '11xl':'9rem',
      },
      opacity: {
        ...defaultTheme.opacity,
        '5':'0.05',
      }
  },
    variants: {},
    plugins: [
        require('@tailwindcss/typography')
    ],
}
