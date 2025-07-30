import './bootstrap';

import Alpine from 'alpinejs';

import Splide from '@splidejs/splide';
import '@splidejs/splide/css';
window.Splide = Splide;

import { tns } from 'tiny-slider/src/tiny-slider';
import 'tiny-slider/dist/tiny-slider.css';
window.tns = tns;

window.Alpine = Alpine;

Alpine.start();
