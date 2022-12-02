import './bootstrap';
import game from './game';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.data('game', game);

Alpine.start();


