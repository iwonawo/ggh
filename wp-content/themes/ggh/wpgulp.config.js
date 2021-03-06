/**
 * WPGulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 *
 * @package WPGulp
 */

module.exports = {
	// Project options.
	projectURL: "localhost/ggh/", // Local project URL of your already running WordPress site. Could be something like wpgulp.local or localhost:3000 depending upon your local WordPress setup.
	productURL: "./", // Theme/Plugin URL. Leave it like it is, since our gulpfile.js lives in the root folder.
	browserAutoOpen: false,
	injectChanges: true,

	// Style options.
	styleSRC: "./css/styles.scss", // Path to main .scss file.
	styleDestination: "./css", // Path to place the compiled CSS file. Default set to root folder.
	outputStyle: "compressed", // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
	errLogToConsole: true,
	precision: 10,

	// JS Vendor options.
	jsVendorSRC: "./js/modules/*.js", // Path to JS vendor folder.
	jsVendorDestination: "./js/", // Path to place the compiled JS vendors file.
	jsVendorFile: "index", // Compiled JS vendors file name. Default set to vendors i.e. vendors.js.

	// Watch files paths.
	watchStyles: "./css/**/*.scss", // Path to all *.scss files inside css folder and inside them.
	watchJsVendor: "./js/modules/**/*.js", // Path to all vendor JS files.
	// watchJsCustom: "./assets/js/custom/*.js", // Path to all custom JS files.
	watchPhp: "./**/*.php", // Path to all PHP files.

	// Translation options.
	textDomain: "WPGULP", // Your textdomain here.
	translationFile: "WPGULP.pot", // Name of the translation file.
	translationDestination: "./languages", // Where to save the translation files.
	packageName: "WPGULP", // Package name.
	bugReport: "https://AhmadAwais.com/contact/", // Where can users report bugs.
	lastTranslator: "Ahmad Awais <your_email@email.com>", // Last translator Email ID.
	team: "AhmadAwais <your_email@email.com>", // Team's Email ID.

	// Browsers you care about for autoprefixing. Browserlist https://github.com/ai/browserslist
	// The following list is set as per WordPress requirements. Though, Feel free to change.
	BROWSERS_LIST: [
		"last 2 version",
		"> 1%",
		"ie >= 11",
		"last 1 Android versions",
		"last 1 ChromeAndroid versions",
		"last 2 Chrome versions",
		"last 2 Firefox versions",
		"last 2 Safari versions",
		"last 2 iOS versions",
		"last 2 Edge versions",
		"last 2 Opera versions",
	],
};
