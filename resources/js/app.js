import './bootstrap';
import Alpine from 'alpinejs';
import game from './game';

window.Alpine = Alpine;

window.Alpine.data('game', game);

Alpine.start();


