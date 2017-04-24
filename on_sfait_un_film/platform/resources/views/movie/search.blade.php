@extends('layouts.app')

@section('content')

    <div class="col-xs-8 col-xs-offset-2">
        <div class="panel panel-default" id="searchbackground">
            <div id='searchform' class="panel-body">
                <div class="icons">
                    <img id='asian' alt="castagne à l'asiatique" src="{{ asset("/images/icons/asian.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='woman' alt="Woman power" src="{{ asset("/images/icons/woman.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='love' alt="de l'AMOUR !" src="{{ asset("/images/icons/love.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='rainbow' alt="Mariage pour tous" src="{{ asset("/images/icons/rainbow.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                </div>
                <div class="break"></div>
                <div class="icons">
                    <img id='fight' alt="Baston ?" src="{{ asset("/images/icons/fight.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='thumb' alt="Adolf approved" src="{{ asset("/images/icons/thumb.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='locked' alt="Huis clos" src="{{ asset("/images/icons/locked.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='god' alt="intervention Divine" src="{{ asset("/images/icons/god.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                </div>
                <div class="break"></div>
                <div class="icons">
                    <img id='geek' alt="Geek attitude" src="{{ asset("/images/icons/geek.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='animal' alt="des zanimaux ?" src="{{ asset("/images/icons/animal.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='duo' alt="Héros en duo" src="{{ asset("/images/icons/duo.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='kill' alt="la réplique qui tue..." src="{{ asset("/images/icons/kill.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                </div>
                <div class="break"></div>
                <div class="icons">
                    <img id='justice' alt="Que justice soit faite !" src="{{ asset("/images/icons/justice.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='crazy' alt="Really crazy..." src="{{ asset("/images/icons/crazy.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='gun' alt="Jamais sans mon GUN" src="{{ asset("/images/icons/gun.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='robot' alt="Robot with Heart" src="{{ asset("/images/icons/robot.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                </div>
                <div class="break"></div>
                <div class="icons">
                    <img id='nanar' alt="Nanar" src="{{ asset("/images/icons/nanar.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='face' alt="Face to face" src="{{ asset("/images/icons/face.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='alien' alt="Alien va !" src="{{ asset("/images/icons/alien.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='music' alt="Music..." src="{{ asset("/images/icons/music.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                </div>
                <div class="break"></div>
                <div class="icons">
                    <img id='drug' alt="No more drugs !" src="{{ asset("/images/icons/drug.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='42' alt="Quelle est la réponse à la vie l'univers et le reste ?" src="{{ asset("/images/icons/42.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='blood' alt="Bloody..." src="{{ asset("/images/icons/blood.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='back' alt="I'll be back..." src="{{ asset("/images/icons/back.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                </div>
                <div class="break"></div>
                <div class="icons">
                    <img id='muscle' alt="Muscle...car" src="{{ asset("/images/icons/muscle.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='cartoon' alt="Cartoon" src="{{ asset("/images/icons/cartoon.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='bnw' alt="Black & White" src="{{ asset("/images/icons/bnw.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='magic' alt="Ta gueule, c'est magique !" src="{{ asset("/images/icons/magic.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                </div>
                <div class="break"></div>
                <div class="icons">
                    <img id='trip' alt="Trip" src="{{ asset("/images/icons/trip.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='quest' alt="Quête" src="{{ asset("/images/icons/quest.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='murder' alt="On a trouvé un corps" src="{{ asset("/images/icons/murder.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                    <img id='hobby' alt="Drôle de passe temps..." src="{{ asset("/images/icons/hobby.svg") }}" />
                    <img class='vhs' src="{{ asset("/images/icons/smallvhs.svg") }}" />
                </div>
                <div class="break"></div>

                <form id='searchbox' class="form-horizontal" method="get" action="{{ url('/search/results') }}">
                    {{ csrf_field() }}

                    <fieldset>

                        <!-- Multiple Checkboxes (inline) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="tags">Tags</label>
                            <div class="col-md-4">
                                <label class="checkbox-inline" for="tags-0">
                                    <input id="asian" type="checkbox" name="tags[]" id="tags-0" value="asian">
                                    asian
                                </label>
                                <label class="checkbox-inline" for="tags-1">
                                    <input type="checkbox" name="tags[]" id="tags-1" value="woman">
                                    woman
                                </label>
                                <label class="checkbox-inline" for="tags-2">
                                    <input type="checkbox" name="tags[]" id="tags-2" value="love">
                                    love
                                </label>
                                <label class="checkbox-inline" for="tags-3">
                                    <input type="checkbox" name="tags[]" id="tags-3" value="rainbow">
                                    rainbow
                                </label>
                                <label class="checkbox-inline" for="tags-4">
                                    <input type="checkbox" name="tags[]" id="tags-4" value="fight">
                                    fight
                                </label>
                                <label class="checkbox-inline" for="tags-5">
                                    <input type="checkbox" name="tags[]" id="tags-5" value="thumb">
                                    adolf
                                </label>
                                <label class="checkbox-inline" for="tags-6">
                                    <input type="checkbox" name="tags[]" id="tags-6" value="locked">
                                    locked
                                </label>
                                <label class="checkbox-inline" for="tags-7">
                                    <input type="checkbox" name="tags[]" id="tags-7" value="god">
                                    god
                                </label>
                                <label class="checkbox-inline" for="tags-8">
                                    <input type="checkbox" name="tags[]" id="tags-8" value="geek">
                                    geek
                                </label>
                                <label class="checkbox-inline" for="tags-9">
                                    <input type="checkbox" name="tags[]" id="tags-9" value="animal">
                                    animal
                                </label>
                                <label class="checkbox-inline" for="tags-10">
                                    <input type="checkbox" name="tags[]" id="tags-10" value="duo">
                                    duo
                                </label>
                                <label class="checkbox-inline" for="tags-11">
                                    <input type="checkbox" name="tags[]" id="tags-11" value="kill">
                                    réplique tue
                                </label>
                                <label class="checkbox-inline" for="tags-12">
                                    <input type="checkbox" name="tags[]" id="tags-12" value="justice">
                                    justice
                                </label>
                                <label class="checkbox-inline" for="tags-13">
                                    <input type="checkbox" name="tags[]" id="tags-13" value="crazy">
                                    crazy
                                </label>
                                <label class="checkbox-inline" for="tags-14">
                                    <input type="checkbox" name="tags[]" id="tags-14" value="gun">
                                    gun
                                </label>
                                <label class="checkbox-inline" for="tags-15">
                                    <input type="checkbox" name="tags[]" id="tags-15" value="robot">
                                    robot
                                </label>
                                <label class="checkbox-inline" for="tags-16">
                                    <input type="checkbox" name="tags[]" id="tags-16" value="nanar">
                                    nanar
                                </label>
                                <label class="checkbox-inline" for="tags-17">
                                    <input type="checkbox" name="tags[]" id="tags-17" value="face">
                                    facetoface
                                </label>
                                <label class="checkbox-inline" for="tags-18">
                                    <input type="checkbox" name="tags[]" id="tags-18" value="alien">
                                    alien
                                </label>
                                <label class="checkbox-inline" for="tags-19">
                                    <input type="checkbox" name="tags[]" id="tags-19" value="music">
                                    music
                                </label>
                                <label class="checkbox-inline" for="tags-20">
                                    <input type="checkbox" name="tags[]" id="tags-20" value="drug">
                                    drug
                                </label>
                                <label class="checkbox-inline" for="tags-21">
                                    <input type="checkbox" name="tags[]" id="tags-21" value="42">
                                    42
                                </label>
                                <label class="checkbox-inline" for="tags-22">
                                    <input type="checkbox" name="tags[]" id="tags-22" value="blood">
                                    blood
                                </label>
                                <label class="checkbox-inline" for="tags-23">
                                    <input type="checkbox" name="tags[]" id="tags-23" value="back">
                                    zombie
                                </label>
                                <label class="checkbox-inline" for="tags-24">
                                    <input type="checkbox" name="tags[]" id="tags-24" value="muscle">
                                    car
                                </label>
                                <label class="checkbox-inline" for="tags-25">
                                    <input type="checkbox" name="tags[]" id="tags-25" value="cartoon">
                                    cartoon
                                </label>
                                <label class="checkbox-inline" for="tags-26">
                                    <input type="checkbox" name="tags[]" id="tags-26" value="bnw">
                                    black and white
                                </label>
                                <label class="checkbox-inline" for="tags-27">
                                    <input type="checkbox" name="tags[]" id="tags-27" value="magic">
                                    magic
                                </label>
                                <label class="checkbox-inline" for="tags-28">
                                    <input type="checkbox" name="tags[]" id="tags-28" value="trip">
                                    trip
                                </label>
                                <label class="checkbox-inline" for="tags-29">
                                    <input type="checkbox" name="tags[]" id="tags-29" value="quest">
                                    quest
                                </label>
                                <label class="checkbox-inline" for="tags-30">
                                    <input type="checkbox" name="tags[]" id="tags-30" value="murder">
                                    murder
                                </label>
                                <label class="checkbox-inline" for="tags-31">
                                    <input type="checkbox" name="tags[]" id="tags-31" value="hobby">
                                    hobby creepy
                                </label>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-xs-6">
                                <button id="singlebutton" name="singlebutton" class="btn btn-lg btn-success">Trouve moi un film !</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div id="searchinfo" class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <p></p>
            </div>
        </div>
    </div>

@endsection