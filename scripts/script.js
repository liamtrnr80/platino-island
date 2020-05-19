simpleCart({
    cartColums: [
        { attr: "name", label: "Name" },
        { attr: "price", label: "Price", view: 'currency'},
        { view: "decrement", label: false },
        { attr: "quantity", label: "Qty" },
        { view: "increment", label: false },
        { attr: "total", label: "SubTotal", view: 'currency' },
        { view: "remove", text: "Remove", label: false }
    ],
    cartStyle: "table",

    checkout: {
        type: "PayPal",
        email: "you@yours.com"
    },

    currency: "AUD",

    data: {},

    language: "english-us",

    excludeFromCheckout: [],

    shippingFlatRate: 0,
    taxRate: 0,
    
    // Event Callbacks
    beforeAdd: null,
    afterAdd: null,
    load: null,
    beforeSave: null,
    afterSave: null,
    update: null,
    ready: null,
    checkoutSuccess: null,
    checkoutFail: null,
    beforeCheckout: null
});