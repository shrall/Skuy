const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            backgroundImage: (theme) => ({
                loginbg: "url('/img/bglogin.svg')",
            }),
            colors: {
                primary: {
                    50: "#ffb931",
                    100: "#FEA203",
                    200: "#FD7603",
                    250: "#f28123",
                    300: "#B55D15",
                    400: "#FDA93F",
                    500: "#FC8100",
                    600: "#D86400",
                },
                primary2: {
                    500: "#FF9900",
                    600: "#DB7A00",
                },
                secondary: {
                    100: "#9FD2C6",
                    200: "#30948E",
                    300: "#11847D",
                    400: "#006666",
                },
                light: {
                    50: "#f5f6f5",
                    100: "#f7f5ed",
                    200: "#eeeeee",
                    300: "#e8e8e8",
                },
                dark: {
                    100: "#208380",
                    200: "#08545f",
                    300: "#032d3f",
                },
                success: "#2F9E83",
                danger: "#FF6633",
                other: "#FFCC33",
            },
            transitionProperty: {
                width: "width",
            },
            height: {
                "vh-50": "50vh",
                "vh-60": "60vh",
                "vh-70": "70vh",
                "vh-80": "80vh",
                "vh-90": "90vh",
                "1/10": "10%",
                "2/10": "20%",
                "3/10": "30%",
                "3.5/10": "35%",
                "4/10": "40%",
                "5/10": "50%",
                "6/10": "60%",
                "7/10": "70%",
                "8/10": "80%",
                "9/10": "90%",
                "2px": "2px"
            },
            inset: {
                "1/5": "20%",
                "2/5": "40%",
                "3/5": "60%",
                "4/5": "80%",
                "1/2": "50%",
                "1/10": "10%",
                "2/10": "20%",
                "3/10": "30%",
                "3.5/10": "35%",
                "4/10": "40%",
                "5/10": "50%",
                "6/10": "60%",
                "7/10": "70%",
                "8/10": "80%",
                "9/10": "90%",
            },
            margin: {
                "2px": "2px"
            },
            fontFamily: {
                "skuy-primary": ['"Nexa"'],
                "skuy-primary-sub": ['"NexaL"'],
                "skuy-secondary": ['"SF"'],
            },
            animation: {
                "gradient-x": "gradient-x 5s ease infinite",
                "gradient-y": "gradient-y 15s ease infinite",
                "gradient-xy": "gradient-xy 15s ease infinite",
            },
            keyframes: {
                "gradient-y": {
                    "0%, 100%": {
                        "background-size": "400% 400%",
                        "background-position": "center top",
                    },
                    "50%": {
                        "background-size": "200% 200%",
                        "background-position": "center center",
                    },
                },
                "gradient-x": {
                    "0%, 100%": {
                        "background-size": "200% 200%",
                        "background-position": "left center",
                    },
                    "50%": {
                        "background-size": "200% 200%",
                        "background-position": "right center",
                    },
                },
                "gradient-xy": {
                    "0%, 100%": {
                        "background-size": "400% 400%",
                        "background-position": "left center",
                    },
                    "50%": {
                        "background-size": "200% 200%",
                        "background-position": "right center",
                    },
                },
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
