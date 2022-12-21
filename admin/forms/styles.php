<style>
    .form__wrapper {
        display: grid;
        grid-template-columns: 2fr 1fr;
        width: 100%;
        max-width: 1200px;
        gap: 1.25rem;
    }

    .product__layout-1 {
        display: flex;
        flex-direction: column;
        gap: 1.75rem;
    }

    .product__layout-1--wrapper,
    .product--images__wrapper,
    .product--price__wrapper {
        padding: 1.25rem 1rem 1rem;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 0.3125rem #1718180d, 0 0.0625rem 0.125rem #00000026;
        min-width: 450px;
        max-height: 185px;
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .product--title__wrapper,
    .product--description__wrapper,
    .product--keywords__wrapper,
    .product--images__wrapper {
        display: flex;
        flex-direction: column;
    }

    label {
        padding-bottom: 0.35rem;
    }

    input {
        border: 0.5px solid rgb(0 0 0 / 15%);
        border-radius: 3px;
        padding-block: 0.5rem;
        padding-inline: 0.75rem !important;
        font-size: 14.5px;
        outline: none;
        font-weight: 300;
        transition: all 0.25s ease;
    }

    input:active,
    input:focus,
    select:active,
    select:focus {
        outline: auto;
        outline-color: blueviolet;
    }

    .product__layout-2 .product--organization {
        padding: 1.25rem 1rem 1rem;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 0.3125rem #1718180d, 0 0.0625rem 0.125rem #00000026;
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .product--organization h3 {
        margin-bottom: 0.25rem;
    }

    select#product_category,
    select#product_brand {
        width: 100%;
        border-radius: 3px;
        padding-block: 0.5rem;
        padding-inline: 0.75rem;
        font-size: 14.5px;
        outline: none;
        font-weight: 300;
    }

    .product--images__wrapper,
    .product--price__wrapper {
        max-height: 100%;
        gap: 0.25rem;
    }

    .product--price__wrapper {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 2.75rem;
    }

    .product--price__wrapper div {
        display: grid;
        grid-template-rows: repeat(2, minmax(0, 1fr));
    }

    input[type="submit"] {
        cursor: pointer;
        background-color: #008060;
        color: #fff;
        width: max-content;
        padding-inline: 1.25rem !important;
    }

    input[type="submit"]:hover {
        background-color: #006e52;
    }
</style>