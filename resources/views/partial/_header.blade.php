<?php $pages= [
        "CHARACTERS",
        "COMICS",
        "MOVIES",
        "TV",
        "GAMES",
        "COLLECTIBLES",
        "VIDEOS",
        "FANS",
        "NEWS",
        "SHOP",
];
?>
<div class="container">
    <div>
      <img src="{{url('/img/dc-logo.png')}}" alt="logo" />
    </div>

    <div>
      <ul>
        @foreach ($pages as $page)
        <li>
          <p>
            <a href="#">{{ $page }}</a>
          </p>
        </li>
        @endforeach
      </ul>
    </div>
</div>

<style lang="scss" scoped>
    img {
      width: 70px;
    }
    
    li {
      height: 100px;
      line-height: 100px;
    }
    
    
    </style>