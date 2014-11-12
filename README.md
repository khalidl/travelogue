# Travelogue

**Update 2014-11-12**: Yes, Travelogue will be updated for Kirby 2. You can safely use this version on K2 without any problems though.

***

Travelogue is a small travel inspired Kirby-theme. It's not limited to just that; use it in any way you like.

The structure is simple and the docs on the [Kirby website](http://getkirby.com/) will help you well underway should you get stuck. Below is a starting guide on how to add an article and how to customize certain elements.

Please let me know if you use this theme, as I'd love to see what you do with it. And don't forget to buy a license for Kirby to support its developer [Bastian Allgeier](http://bastianallgeier.com).

If you find any bug, please open up an issue here on GitHub.

## Support
The theme is provided as is, I can not provide support for Kirby-related issues. Travelogue works flawlessly with Kirby 1, and was tested on Kirby 2 without any major issues. I have received a couple of support requests, which ended up being hosts not fully compatible with Kirby itself. **The [Kirby Forum](http://getkirby.com/forum/) will help you find a proper solution for that.**

## Getting started
If you're not entirely familiar with Kirby, then it's best to quickly go through the following little guide: [Getting started](http://getkirby.com/docs/getting-started). After that download [Kirby](http://getkirby.com/downloads), unzip the contents and read the included readme.

You will now have a Kirby folder with a basic installation and its standard theme. From that folder delete the following **three** subfolders:  
- `/assets`  
- `/content `  
- `/site`  

Unzip Travelogue and copy over the following subfolders and files to the Kirby folder:  
- `/-`  
- `/content`  
- `/site`  
- `apple-touch-icon.png`  
- `favicon.ico`  

Great, you have all the files in place to be uploaded to your server.
If you're on a Mac, make sure Finder is set to show invisible files. You might miss the **.htaccess** file if you don't.
All there's left to do is upload the following files to your server:  
- `/-`  
- `/content`  
-  `/kirby`  
- `/site`  
- `index.php`  
- `.htaccess`  
- `apple-touch-icon.png`  
- `favicon.ico`  

## Modify
Travelogue comes with a couple of articles to get you on your way and to see how it's structured. It is as flat as possible.
You'll mostly be doing things in the `/content` folder. For the background-images that are used on the homepage and the article headers you need to dive a bit into the CSS.

### Background-images
First add two backgrounds to `/-/img/cities/[YOUR CITY NAME]/bg/`. A small version used for the homepage and a bigger version (higher resolution) used for the header on article pages. You can also use the same image for both if you like.

You can also have these images in the article folder itself if you prefer that. There is an article on the Kirby blog that explains how to do add **.css** files for each post: [Art-directed blog posts](http://getkirby.com/blog/art-directed-posts).

### CSS
Backgrounds for cities are then added via **cities.css** which can be found in `/-/css/`. Duplicate a rule that is already provided in the stylesheet and modify it to reflect the correct path to the images. You have to do this twice, one for the homepage and one for the article header.

Take note of the class names you give the CSS-rules, these are important when modifying the article's main text file. You can name them however you want, but the included examples all use a three-letter class for consistency, most of which can be found on [World Airport Codes](http://www.world-airport-codes.com/).

### Content
I recommend you read up on this primer first: [Adding content](http://getkirby.com/docs/content).

To modify the content in an article, open up it's main text file – **article.txt** – which is located in the content-folder, e.g., `/content/01-munchen/article.txt`.

All fields and content should be self-explanatory, but there are a couple of fields which need some more explanation, namely **ShortCode** and **HeaderContrast**.  

#### ShortCode
For this use the same class name that you used in **cities.css**. This will ensure that the right background image is added to the homepage and your article.

#### HeaderContrast
Sometimes a background-image will make the main-navigation hard to see.
You can try a different contrast on the navigation when this occurs. The default is empty, but you can choose between three other contrasts:   
- l(ight)  
- m(edium)  
- d(ark)  
e.g. <code>HeaderContrast: d</code>

Or alternatively use an image editor to adjust images to your liking.

### Images, alt text and captions
Kirby automatically adds any images that are in an article's folder.
You can add an alt-text and a caption (which shows up when hovering) to an image by editing its corresponding text file. There are two fields:  
1. **Alt**, which is set as the alt-text for an image (for screen-reader enabled browsers or when images are disabled)  
2. **Caption**, which sets additional information for an image and show on hover

## Wrap up
I hope you enjoy using this theme, please let me know when you use it or have any questions. Have fun!

<hr>

## Attributions
### Favicon
- [Globe](http://thenounproject.com/noun/globe/#icon-No247) from The Noun Project

### Images
#### New York
- [New York Sunset 42nd street](http://www.flickr.com/photos/ax3l82/6337853378/)
- [2nd Avenue](http://www.flickr.com/photos/25230924@N08/8027617770/in/set-72157615015745614)
- [Empire State Building](http://www.flickr.com/photos/stimul/4986347251/)
- [Central Park New York City](http://www.flickr.com/photos/kevincappis/6227540355/)

#### San Francisco
- [Dolores Park](http://www.flickr.com/photos/11743964@N07/3230799276/)
- [Golden Gate Bridge](http://www.flickr.com/photos/alexkidato/3670622683/)
- [Golden Gate](http://www.flickr.com/photos/mamzelmistic/2668250651/)
- [Dolores Park 2](http://www.flickr.com/photos/telstar/6808872976/)

#### Tokyo
- [Cloudy Tokyo](http://www.flickr.com/photos/soshiro/8039118040/in/photostream/)

#### Amsterdam
- [Bike](http://www.flickr.com/photos/shareq/9029051858/)

#### Oslo
- [Oslo](http://www.flickr.com/photos/simenschi/8828960550/)

#### Munchen
- [Live at Olympiastadion](http://www.flickr.com/photos/a-haranghy/8750699235/)

#### 404 Page
- [The Blue Marble - Nasa Visible Earth](http://visibleearth.nasa.gov/view.php?id=57723)

### Copy
Each article’s body-text is taken from their respective Wikipedia-page.
