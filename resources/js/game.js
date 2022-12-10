export default function game() {
    return {
        id: null,
        isOnWishlist: false,
        setGame(id, isOnWishlist) {
            this.id = id;
            this.isOnWishlist = isOnWishlist;
        },

        // click handler to make our fetch request and update state
        toggleWishlist(userId, shouldRemove = false) {
            // axios is an http request helper library
            window.axios.get(`http://localhost/api/toggle-wishlist/${this.id}?user=${userId}`)
                .then(resp => {
                    if (shouldRemove) {
                        this.$refs.game.remove();
                    } else {
                        this.isOnWishlist = resp.data.is_on_wishlist;
                    }
                }).catch(err => console.debug('error', err));
        }
    }
};
