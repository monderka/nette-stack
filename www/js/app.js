import naja from 'naja';
import netteForms from 'nette-forms';
import "../css/style.css";

window.Nette = netteForms;

document.addEventListener('DOMContentLoaded', naja.initialize.bind(naja));
netteForms.initOnLoad();