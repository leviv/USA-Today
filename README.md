# USA-Today
Clone of a USA Today and Tennessean article, for the Center for Media Engagement research study. Used to A/B test a possible 'Explain Your Process' box for news articles.

## Prerequisites
to run this project you need to have a local server installed to run PHP (I use [MAMP](https://www.mamp.info/en/)).

In order to compile the styles for this project, you need to have SASS installed.

To install SASS using npm
```bash
npm install -g sass
```

Install SASS using homebrew
```bash
brew install sass/sass/sass
```

## Getting started
To clone the repository to your local machine
```bash
git clone git@github.com:leviv/USA-Today.git
```
Then simply open `index.html` in your favorite web browser to get it up and running

## Development
To compile SASS changes to make them take effect
```bash
cd assets/css
sass --watch styles.sass:styles.css
```
