const defaultTheme = require('tailwindcss/defaultTheme')
const {colors} = defaultTheme

module.exports = {
    purge: [],
    theme: {
        container: {
            center: true,
            padding: '1rem'
        },
        screens: {
            '2xl': '1306px',
            'x': {'max': '1250px'},
            'lg': {'max': '1100px'},
            'l': {'max': '1000px'},
            'md': {'max': '912px'},
            'sm': {'max': '768px'},
            'xsm': {'max': '650px'},
            'xs': {'max': '600px'},
            '2xs': {'max': '480px'},
            '2sm': {'max': '430px'},
            '3xs': {'max': '400px'},
            's': {'max': '365px'},
        },
        boxShadow: {
            ...defaultTheme.boxShadow,
            '4lg': '0 3px 6px 1px rgba(0, 0, 0, 0.1), 0 -5px 8px -1px rgba(0, 0, 0, 0.05);',
        },
        borderWidth: {
            ...defaultTheme.borderWidth,
            '3': '3px',
        },
        borderRadius: {
            ...defaultTheme.borderRadius,
            '2xl': '1rem',
          },
        extend: {
            spacing: {
                7: '1.75rem',
                10: '2.5rem',
                28: '7rem',
                14: '3.5rem',
                15: '3.75rem',
                22: '5.5rem'
            },
            width: {
                ...defaultTheme.width,
                'max': 'max-content',
                '44': '11rem',
                '60': '15rem',
                '68': '17rem',
                '96': '24rem',
                '18/100': '18%',
                '21/100': '21%',
                '22/100': '22%',
                '29/100': '29%',
                '30/100': '30%',
                '31/100': '31%',
                '38/100': '38%',
                '39/100': '39%',
                '42/100': '42%',
                '46/100': '46%',
                '47/100': '47%',
                '48/100': '48%',
                '58/100': '58%',
                '62/100': '62%',
                '66/100': '66%',
                '70/100': '70%',
                '80/100': '80%',
                '90/100': '90%'
            },
            height: {
                ...defaultTheme.height,
                '56': '14rem',
                '68': '17rem',
                '80': '20rem',
                '88': '23rem',
                '104': '26rem',
                '120': '32rem',
            },
            minHeight: {
                ...defaultTheme.minHeight,
                '26': '26rem',
                '31': '31rem',
                '35': '35rem'
            },
            maxHeight: {
                ...defaultTheme.maxHeight,
                '35': '35rem'
            },
            colors: {
                gray: {
                    ...colors.gray,
                    50: '#CCCCCC',
                    75: '#BEBEBE',
                    100: '#F5F5F5',
                    125: '#E6E6E6',
                    150: '#B8B8B8',
                    175: '#E2E2E2',
                    200: '#949494',
                    225: '#828282',
                    250: '#DCDCDC',
                    300: '#7B7B7B',
                    350: '#757575',
                    375: '#565656',
                    400: '#8A8A8A',
                    600: '#4E4E4E',
                    700: '#2F3036',
                    750: '#32373E',
                    800: '#292929'
                },
                orange: {
                    ...colors.orange,
                    150: '#FFB36A',
                    200: '#FFAF46',
                    350: '#FF8D29',
                    300: '#FF9F21',
                    400: '#D67A21'
                },
                green: {
                    ...colors.green,
                    50: '#EFFFFD',
                    200: '#77AC60',
                    300: '#00AC34',
                    400: '#417D28',
                },
                blue: {
                    ...colors.blue,
                    400:'#3D5D9E',
                    500: '#2D2DFF'
                },
                red: {
                    ...colors.red,
                    150: '#FF8888',
                    350: '#F62727',
                    400: '#C82F2F',
                    500: '#CF0000'
                },
                brown: {
                    ...colors.brown,
                    500: '#E3B085'
                }
            }
        },
        fontFamily: {
            'bebas': ['Bebas Neue'],
            'okta': ['Okta Neue, sans-serif'],
            'avenir': ['Avenir Next Cyr']
        },
        fontSize: {
            ...defaultTheme.fontSize,
            '7xl':'5rem',
            '4.5xl': '2.5rem',
            '11xl': '9rem'
        },
        inset: {
            ...defaultTheme.inset,
            '-1/2': '-50%',
            4: '1rem'
        },
    },
    variants: {},
    plugins: [],
}
