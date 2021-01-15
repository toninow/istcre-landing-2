//Animate my counter from 0 to set number (6)
$({ counter: 0 }).animate({ counter: 16 }, {
    //Animate over a period of 2seconds
    duration: 12000,
    //Progress animation at constant pace using linear
    easing: 'linear',
    step: function() {
        //Every step of the animation, update the number value
        //Use ceil to round up to the nearest whole int
        $('.total').text(Math.ceil(this.counter))
    },
    complete: function() {
        //Could add in some extra animations, like a bounc of colour change once the count up is complete.
    }
});

$({ counter1: 0 }).animate({ counter1: 50 }, {
    //Animate over a period of 2seconds
    duration: 12000,
    //Progress animation at constant pace using linear
    easing: 'linear',
    step: function() {
        //Every step of the animation, update the number value
        //Use ceil to round up to the nearest whole int
        $('.total1').text(Math.ceil(this.counter1))
    },
    complete: function() {
        //Could add in some extra animations, like a bounc of colour change once the count up is complete.
    }
});

$({ counter2: 0 }).animate({ counter2: 200 }, {
    //Animate over a period of 2seconds
    duration: 12000,
    //Progress animation at constant pace using linear
    easing: 'linear',
    step: function() {
        //Every step of the animation, update the number value
        //Use ceil to round up to the nearest whole int
        $('.total2').text(Math.ceil(this.counter2))
    },
    complete: function() {
        //Could add in some extra animations, like a bounc of colour change once the count up is complete.
    }
});

$({ counter3: 0 }).animate({ counter3: +500 }, {
    //Animate over a period of 2seconds
    duration: 12000,
    //Progress animation at constant pace using linear
    easing: 'linear',
    step: function() {
        //Every step of the animation, update the number value
        //Use ceil to round up to the nearest whole int
        $('.total3').text(Math.ceil(this.counter3))
    },
    complete: function() {
        //Could add in some extra animations, like a bounc of colour change once the count up is complete.
    }
});