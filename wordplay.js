window.onload = function(){
    game.init();
}

game = {
    id: '',

    init: function(){},

    scores = {
        p1: '',
        p2: '',
        p3: '',
        p4: '',
    },
    
    put_tile: function(){},

    rm_tile: function(){},
}

tile = {
    ch: '',
    val: '',
    freq: '',
}

bag = {
    letters: [],
    num_remaining: function(){
        return this.all_letters.length;
    }
    empty: '',
}

rack = {
    letters: [],
    shuffle: function(){
        // shuffles the letters in the rack so the player can think of new words  
        return this.letters.sort(function(){return 0.5 - Math.random()});
    },
    get_letters: function(){
        return this.letters
    },
    slide_tile: function(){
        // lets the player drag tiles around the rack
    },
}

player = {
    id: '',
    name: '',
    word_list: [],
    score: '',
    rack: '',
}
