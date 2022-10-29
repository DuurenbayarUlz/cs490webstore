<style>
    .header {
        width: 100%;
        height: 8vh;
        background-color: orange;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .header-logo {
        width: 150px;
        overflow-x: hidden;
        padding: 10px;
        margin-right: 20px;
    }

    .header-logo h1 {
        font-size: 2em;
    }

    .header-input input {
        width: 35vw;
    }

    .header-navigation {
        display: flex;
        width: 30vw;
        max-width: 300px;
        height: 100%;
        justify-content: space-between;
        align-items: center;
        margin-right: 30px;
    }

    .header-navigation p {
        margin-bottom: 0;
        cursor: pointer;
        padding-left: 5px;
    }

    .header-logo h2 a,
    .header-navigation p a {
        text-decoration: none;
        color: black;
    }

    .header-logo h2 a :hover,
    .header-navigation-cart :hover,
    .header-navigation-wishlist :hover,
    .header-navigation-account :hover {
        color: rgb(164, 107, 0);
    }

    .header-navigation-cart,
    .header-navigation-wishlist,
    .header-navigation-account {
        display: flex;
    }
</style>

<header>
    <div class="header">
        <div class="header-logo">
            <h2><a href="index.php">Webstore</a></h2>
        </div>
        <div class="header-input">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
        </div>
        <div class="header-navigation">
            <div class="header-navigation-account">
                <img src="../images/profile.png" alt="heart-icon" height="18" width="18" />
                <p><a href="account.php">My account</a></p>
            </div>
            <div class="header-navigation-wishlist">
                <img src="../images/HeartIcon2.png" alt="heart-icon" height="18" width="18" />
                <p><a href="wishlist.php">Wishlist</a></p>
            </div>
            <div class="header-navigation-cart">
                <img src="../images/shopping-cart.png" alt="heart-icon" height="18" width="18" />
                <p><a href="cart.php">My Cart</a></p>
            </div>
        </div>
    </div>
</header>