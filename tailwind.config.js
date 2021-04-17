module.exports = {
    purge: ['.storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            body: ['IRANSans', 'sans-serif'],
            display: ['IRANSans', 'sans-serif'],
        },
        extend: {
            margin: {
                '15': '3.75rem',
                '70': '0.72rem',
                '21': '5.5rem',
            },
            width: {
                '10': '10%',
                '30': '30%',
                '68': '17rem',
                '63': '63%',
                '70': '70%',
                '71': '71%',
                '73': '70.5%',
                '78': '78%',
                '88': '88%',
                '90': '90%',
                '95': '95%',

            },
            maxWidth: {
                '53': '51rem',
                '60': '60rem',
                '61': '61rem',
                '85': '85%',
                '1200': '1200px',
                '980': '980px',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
