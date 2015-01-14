various svg clocks.

clock.svg: tropical year, synodic month, solar day. animated with javascript.

sidereal.svg: sidereal year, month, and day. animated with javascript.

sidereal.smil.svg: sidereal year, month, and day. initialized with javascript and animated with smil.

standard.svg: "standard" 24-hour clock with noon at the bottom, date, and day of week. animated with javascript.

standard.smil.svg: "standard" 24-hour clock with noon at the bottom and day of week. initialized with javascript and animated with smil.

standard.css.svg: "standard" 24-hour clock with noon at the bottom and day of week. animated with css. doesn't initialize to the current time, but rather starts at 00:00:00 on sunday every time.

a few observations:
* when using requestAnimationFrame, javascript performs about the same as css and smil. there is no performance benefit to not using javascript.
* chrome seems to offload some of the work for css animations to the gpu. it doesn't for smil and javascript animations. overall performance and power usage seems to be about the same for most common configurations, tho.
* the css-animated one stops running after a while in chrome.
* css and smil animations do play when the svg is loaded in an img tag, while javascript animations don't.
* a lot of things that are easy to do in javascript are impossible in smil and css.
* combining javascript with smil is a lot easier than combining javascript with css.
* the second hand in sidereal.smil.svg runs twice as fast as it should, and i can't figure out why. i fixed it by just doubling the duration of the animation.
