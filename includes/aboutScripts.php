<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="js/quiz.js"></script>
<script>
  $('#quiz').quiz({
    //resultsScreen: '#results-screen',
    //counter: false,
    //homeButton: '#custom-home',
    counterFormat: 'Question %current of %total',
    questions: [
      {
        'q': 'What fossil is this image?<br> <img src="img/collections/trex.jpg" style="width:250px; height:200px;">',
        'options': [
          'Tyrannosaurus Rex',
          'Stegosaur',
          'Orinthomimosaur',
          'Triceratops '
        ],
        'correctIndex': 0,
        'correctResponse': 'CORRECT! <br> It\'s the cast of our fossil Trannosaur from the late Maastrichtian Age! ',
        'incorrectResponse': 'Incorrect!'
      },
      {
        'q': 'Where is the collection place for our fossil \'Dinosaur Egg\'?',
        'options': [
          'Spain',
          'Scotland',
          'France',
          'Germany'
        ],
        'correctIndex': 2,
        'correctResponse': 'CORRECT! <br> It was collected from: Aix-en-Provence, France, EUROPE.',
        'incorrectResponse': 'Incorrect!'
      },
      {
        'q': 'Our Plant Fossil \'Calamites suckowii\' is associated with whom? ',
        'options': [
          'Mitch Connor',
          'Evangeline Rose',
          'Nick Rodgers',
          'Robert Dunlop'
        ],
        'correctIndex': 3,
        'correctResponse': 'CORRECT! <br> It arrived from the Robert Dunlop Collection!',
        'incorrectResponse': 'Incorrect!'
      },
      {
        'q': 'What tooth marks were found imprinted into our \'Triceratops Bone\' fossil?',
        'options': [
          'Velociraptor',
          'Spinosaurus',
          'Tyrannosaurus Rex',
          'Dilophosaurus'
        ],
        'correctIndex': 2,
        'correctResponse': 'CORRECT <br> It shows Tyrannosaurus rex tooth marks, from the late Maastrichtian Age!',
        'incorrectResponse': 'Incorrect!'
      },
      {
        'q': 'What is the collection place for our \'Coal\' Mineral?',
        'options': [
          'North America',
          'Eastern Africa',
          'Western Europe',
          'South Asia'
        ],
        'correctIndex': 1,
        'correctResponse': 'CORRECT! <br> It was collected from: Rivulet Natole, Tete, Mozambique, Eastern Africa.',
        'incorrectResponse': 'Incorrect!'
      },
      {
        'q': 'What plant does this image belong to? <br> <img src="img/collections/arch-hibernica.jpg" style="width:250px; height:225px;"> ',
        'options': [
          'Archaeopteris hibernica',
          'Palaeopitys miller',
          'Sphenopteris Arberi',
          'Telangium Affine'
        ],
        'correctIndex': 0,
        'correctResponse': 'CORRECT! <br> It has a thin slab of Green siltstone with compressed plant foliage.',
        'incorrectResponse': 'Incorrect!'
      },
      {
        'q': 'Our \'Stegosaur\' fossil belongs to what dinosaur period? ',
        'options': [
          'Cretaceous',
          'Lower Triassic',
          'Upper Jurassic',
          'Triassic'
        ],
        'correctIndex': 2,
        'correctResponse': 'CORRECT! <br> It comes from the Kimmeridgian to Tithonian Ages (Upper Jurassic).',
        'incorrectResponse': 'Incorrect!'
      },
      {
        'q': 'Where was our \'Thursophyton Milleri\' Plant collected?',
        'options': [
          'England',
          'Wales',
          'Ireland',
          'Scotland'
        ],
        'correctIndex': 3,
        'correctResponse': 'CORRECT! <br> It was collected from: Thurso, Caithness, Scotland, EUROPE.',
        'incorrectResponse': 'Incorrect!'
      },
      {
        'q': 'Which of these are not consituent minerals of \'Granite\'?',
        'options': [
          'Quartz',
          'Gabbro',
          'Biotite',
          'Orthoclase '
        ],
        'correctIndex': 1,
        'correctResponse': 'CORRECT! <br> The constituent minerals of granite are; Quartz, Biotite, Oligoclase & Orthoclase.',
        'incorrectResponse': 'Incorrect!'
      },
      {
        'q': 'Which of our fossils where collected from \'North America\'?',
        'options': [
          'Hadrosaur Skull',
          'Dinosaur Footprint',
          'Triceratops Skull',
          'Iguanodon Tooth '
        ],
        'correctIndex': 1,
        'correctResponse': 'CORRECT! <br> It was collected from: Connecticut, USA, North America.',
        'incorrectResponse': 'Incorrect!'
      }
    ]
  });
</script>
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>