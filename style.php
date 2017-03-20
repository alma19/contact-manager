<?php

include 'styleheader.php'

?>

<h1>Styles</h1>

<div class="colors row">
  <div class="col-lg-6 col-md-6">
    <h2>Colors</h2>
  </div>
  <div class="col-lg-2 col-md-2 col-xs-4 sizing">
    <div class="color-box" id="box1"></div>
    <p class="color-text">#D2B8F3 </p>
  </div>

  <div class="col-lg-2 col-md-2 col-xs-4 sizing">
    <div class="color-box" id="box2"></div>
    <p class="color-text"> #AA70F5 </p>
  </div>

  <div class="col-lg-2 col-md-2 col-xs-4 sizing">
    <div class="color-box" id="box3"></div>
    <p class="color-text">  #503573</p>
  </div>

    <div class="col-lg-6 col-md-6"></div>

    <div class="col-lg-2 col-md-2 col-xs-4 sizing">
      <div class="color-box" id="box4"></div>
      <p class="color-text">#BC6CC6</p>
    </div>

    <div class="col-lg-2 col-md-2 col-xs-4 sizing">
      <div class="color-box" id="box5"></div>
      <p class="color-text">#6F1E7A</p>
    </div>


    <div class="col-lg-2 col-md-2 col-xs-4 sizing">
      <div class="color-box" id="box6"></div>
      <p class="color-text">#411147</p>
    </div>

    <div class="col-lg-6 col-md-6"></div>

    <div class="col-lg-2 col-md-2 col-xs-4 sizing">
      <div class="color-box" id="box7"></div>
      <p class="color-text">#DADADA</p>
    </div>

    <div class="col-lg-2 col-md-2 col-xs-4 sizing">
      <div class="color-box" id="box8"></div>
      <p class="color-text">#9A9A9A</p>
    </div>

    <div class="col-lg-2 col-md-2 col-xs-4 sizing">
      <div class="color-box" id="box9"></div>
      <p class="color-text">#0E0D0A</p>
    </div>

  </div>



<div class="row">
  <div class="col-lg-12 col-md-12">
    <h2>Typography</h2>
  </div>

  <div class="col-lg-6 col-md-6">
    <h3>Fonts</h3>
  </div>



  <div class="col-lg-3 col-md-3 sizing">
    <p class="ubuntu light">Ubuntu Light</p>
    <p class="ubuntu regular">Ubuntu Regular</p>
    <p class="ubuntu bold">Ubuntu Bold</p>
  </div>

  <div class="col-lg-3 col-md-3 sizing">
    <p class="roboto light">Roboto Light</p>
    <p class="roboto regular">Roboto Regular</p>
    <p class="roboto bold">Roboto Bold</p>
  </div>


  <div class="col-lg-6 col-md-6">
    <h3>Headings</h3>
  </div>


  <div class="col-lg-6 col-md-6"></div>
  <div class="headings col-lg-6 col-md-6">
    <h1 class="heading1"> Heading 1</h1>
    <h2 class="heading2"> Heading 2</h2>
    <h3 class="heading3"> Heading 3</h3>
    <h4 class="heading4"> Heading 4</h4>
    <h5 class="heading5">Heading 5</h5>
  </div>


  <div class="col-lg-6 col-md-6">
    <h3>Paragraphs</h3>
  </div>

  <div class="col-lg-6 col-md-6"></div>
  <div class="col-lg-6 col-md-6">
    <p>
      <span class="bold">Paragraph text.</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac tristique odio. Suspendisse eget turpis risus. Suspendisse aliquet sollicitudin erat, at vulputate mi malesuada eu.
    </p>

    <p class="bold">
      <span class="bold">p.lead-text.</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac tristique odio. Suspendisse eget turpis risus. Suspendisse aliquet sollicitudin erat, at vulputate mi malesuada eu.
    </p>

    <p class="light">
      <span class="bold">p.light-text.</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac tristique odio. Suspendisse eget turpis risus. Suspendisse aliquet sollicitudin erat, at vulputate mi malesuada eu.
    </p>


  </div>
</div> <!--typography row -->

<div class="row">
  <div class="col-lg-12 col-md-12"?>
    <h2>UI Elements</h2>
  </div>


  <div class="col-lg-6 col-md-6">
    <h3>Buttons</h3>
  </div>


  <div class="col-lg-6 col-md-6 sizing">
    <button class="btn btn-primary btn-sm">Small Button</button>
  </div>

  <div class="col-lg-6 col-md-6"></div>
  <div class="col-lg-6 col-md-6 sizing">
    <button class="btn btn-primary btn-md">Medium Buttom</button>
  </div>

  <div class="col-lg-6 col-md-6"></div>
  <div class="col-lg-6 col-md-6 sizing">
    <button class="btn btn-primary btn-lg">Large Button</button>
  </div>

  <div class="col-lg-6 col-md-6">
    <h3>Inputs</h3>
  </div>

  <div class="col-lg-6 col-md-6"></div>
  <div class="form-group input col-lg-6 col-md-6">
    <label for="text-input" id="text-input" name="text-input">Text Input</label>
    <input class="form-control" type="text" value="" placeholder="Text Input" />
  </div>

  <div class="col-lg-6 col-md-6"></div>
  <div class="form-group col-lg-6 col-md-6">
    <label>Select Input</label>
    <select value="" class="form-control">
      <option value="Select here" selected>
        Select here
      </option>
    </select>
  </div>

  <div class="col-lg-6 col-md-6"></div>
  <div class="form-group col-lg-6 col-md-6">
    <label>Textarea Input</label>
    <textarea class="form-control" placeholder="Textarea Input"></textarea>
  </div>


  <div class="col-lg-6 col-md-6">
    <h3>Lists</h3>
  </div>

  <div class="col-lg-3 col-md-3 sizing">
    <h4> ul | Unordered List</h4>
    <ul>
      <li>li </li>
      <li> li </li>
      <li> li </li>
    </ul>
  </div>

  <div class="col-lg-3 col-md-3 sizing">
    <h4> ol | Ordered List</h4>
    <ol>
      <li>li </li>
      <li> li</li>
      <li> li</li>
    </ol>
  </div>


</div>  <!--ui row -->

<div class="row">
  <div class="col-lg-6 col-md-6">
    <h2>Icons</h2>
  </div>

  <div class="col-lg-3 col-md-3 sizing">
    <i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
  </div>

  <div class="col-lg-3 col-md-3 sizing">
    <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
  </div>


  <div class="col-lg-6 col-md-6"></div>
  <div class="col-lg-3 col-md-3 sizing">
    <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
  </div>

  <div class="col-lg-3 col-md-3 sizing">
    <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
  </div>

</div>



<?php

include 'footer.php'

?>
