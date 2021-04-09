module.exports = {
    purge: ['.storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            body: ['IRANSans', 'sans-serif'],
            display: ['IRANSans', 'sans-serif'],
        },
        extend: {
            width: {
                '30': '30%',
                '71': '71%',
                '78': '78%',
                '88': '88%',
                '90': '90%',

            },
            maxWidth: {
                '53': '51rem',
                '60': '60rem',
                '61': '61rem',
                '67': '67rem',
                '980': '980px',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
