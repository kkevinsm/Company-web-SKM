import './bootstrap';

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

import { tns } from 'tiny-slider/src/tiny-slider';
import 'tiny-slider/dist/tiny-slider.css';
window.tns = tns;

window.Alpine = Alpine;

Alpine.plugin(intersect);
Alpine.start();
