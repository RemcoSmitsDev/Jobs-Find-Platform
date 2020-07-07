module.exports = {
    purge: [],
    theme: {
        extend: {
            screens: {
                dark: { raw: "(prefers-color-scheme: dark)" }
                // => @media (prefers-color-scheme: dark) { ... }
            }
        }
    },
    variants: {
        appearance: ["responsive"],
        backgroundColor: [
            "responsive",
            "hover",
            "focus",
            "active",
            "group-hover",
            "group-focus",
            "focus-within"
        ],
        opacity: [
            "responsive",
            "hover",
            "focus",
            "disabled",
            "group-hover",
            "group-focus",
            "focus-within"
        ],
        zIndex: [
            "responsive",
            "hover",
            "focus",
            "group-hover",
            "group-focus",
            "focus-within"
        ],
        borderWidth: [
            "responsive",
            "first",
            "hover",
            "focus",
            "group-hover",
            "group-focus",
            "focus-within"
        ],
        width: [
            "responsive",
            "first",
            "hover",
            "focus",
            "group-hover",
            "group-focus",
            "focus-within"
        ],
        space: [
            "responsive",
            "hover",
            "focus",
            "group-hover",
            "group-focus",
            "focus-within"
        ],
        textColor: [
            "responsive",
            "hover",
            "focus",
            "active",
            "group-hover",
            "group-focus",
            "focus-within"
        ],
        wordBreak: [
            "responsive",
            "hover",
            "focus",
            "group-hover",
            "group-focus",
            "focus-within"
        ],
        borderWidth: [
            "responsive",
            "hover",
            "focus",
            "group-hover",
            "group-focus",
            "focus-within"
        ],
        space: [
            "responsive",
            "hover",
            "focus",
            "group-hover",
            "group-focus",
            "focus-within"
        ]
    },
    plugins: []
};
