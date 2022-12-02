import './bootstrap';

import Alpine from 'alpinejs';
import axios from 'axios';

window.Alpine = Alpine;

window.Alpine.data('wishlistController', () => ({
    id: null,
    isOnWishlist: false,
    setGame(id, isOnWishlist){
        this.id = id;
        this.isOnWishlist = isOnWishlist;
    },
    getGame() {
        console.debug('game', this.id);
    },

    toggleOnWishlist(){
        axios.get('http://localhost/api/add-to-wishlist/${this.id}')
        .then(resp => {
            console.debug('response', resp);
            this.isOnWishlist = resp.data.is_on_wishlist;
        });
    }
}))

Alpine.start();


