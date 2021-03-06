require("./bootstrap");

const model_url = "./model/";
let pitch;
let mic;
let freq = 0;
let threshold = 1;

let notes = [
    {
        note: "MIBAS",
        freq: 82,
    },
    {
        note: "FABAS",
        freq: 87.5,
    },
    {
        note: "SOLBAS",
        freq: 98,
    },
    {
        note: "LABAS",
        freq: 110,
    },
    {
        note: "SIBAS",
        freq: 132.5,
    },
    {
        note: "DO",
        freq: 130,
    },
    {
        note: "RE",
        freq: 146,
    },
    {
        note: "Mi",
        freq: 164.5,
    },
    {
        note: "FA",
        freq: 175,
    },
    {
        note: "SOL",
        freq: 196,
    },
    {
        note: "LA",
        freq: 220,
    },
    {
        note: "SI",
        freq: 247,
    },
    {
        note: "DO",
        freq: 260,
    },
];

function setup() {
    createCanvas(400, 400);
    audioContext = getAudioContext();
    mic = new p5.AudioIn();
    mic.start(listening);
}

function listening() {
    console.log("listening");
    pitch = ml5.pitchDetection(
        model_url,
        audioContext,
        mic.stream,
        modelLoaded
    );
}

function draw() {
    background(0);
    textAlign(CENTER, CENTER);
    fill(255);
    textSize(32);
    text(freq.toFixed(2), width / 2, height - 150);

    let closestNote = -1;
    let recordDiff = Infinity;
    for (let i = 0; i < notes.length; i++) {
        let diff = freq - notes[i].freq;
        if (abs(diff) < abs(recordDiff)) {
            closestNote = notes[i];
            recordDiff = diff;
        }
    }

    textSize(64);
    text(closestNote.note, width / 2, height - 50);

    let diff = recordDiff;
    // let amt = map(diff, -100, 100, 0, 1);
    // let r = color(255, 0, 0);
    // let g = color(0, 255, 0);
    // let col = lerpColor(g, r, amt);

    let alpha = map(abs(diff), 0, 100, 255, 0);
    rectMode(CENTER);
    fill(255, alpha);
    stroke(255);
    strokeWeight(1);
    if (abs(diff) < threshold) {
        fill(0, 255, 0);
    }
    rect(200, 100, 200, 50);

    stroke(255);
    strokeWeight(4);
    line(200, 0, 200, 200);

    noStroke();
    fill(255, 0, 0);
    if (abs(diff) < threshold) {
        fill(0, 255, 0);
    }
    rect(200 + diff / 2, 100, 10, 75);
}

function modelLoaded() {
    console.log("model loaded");
    pitch.getPitch(gotPitch);
}

function gotPitch(error, frequency) {
    if (error) {
        console.error(error);
    } else {
        //console.log(frequency);
        if (frequency) {
            freq = frequency;
        }
        pitch.getPitch(gotPitch);
    }
}
