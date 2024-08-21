    $string = strtolower($string);
    if(strlen($string) >= 2){
      $string[1] = strtoupper($string[1]);
    }
    return $string;
  }
}

class Pajamas{
  private $owner, $fit, $color;
  function __construct(
    $owner = "malik",
    $fit = "fine",
    $color = "black"
    ){
      $this->owner = StringUtils::secondCase($owner);
      $this->fit = $fit;
      $this->color = $color;
  }
  public function setFit($new_fit){
    $this->fit = $new_fit;
  }
  function describe(){
    return "$this->owner $this->fit pajamas fits $this->color ";
  }
}

class ButtonablePajamas extends Pajamas{
  private $button_state = "unbuttoned";
  public function describe(){
    return parent:: describe() ." The also have button woth are currently $this->button_state";
  }
  function toggleButton(){
    if($this->button_state === "unbuttoned"){
      $this->button_state = "buttoned";
    }else{
      $this->butoon_state = "unbuttoned";
    }
  }
}

$chicken_PJs = new Pajamas("CHIKEN", "just fine", "red");
echo $chicken_PJs->describe() . "\n";
$chicken_PJs->setFit("little old");
echo $chicken_PJs->describe();
$moose_PJs = new ButtonablePajamas("moose", "fine", "purple");
echo "\n";
echo $moose_PJs->describe();
$moose_PJs->toggleButton();
echo $moose_PJs->describe();
echo "\n";
echo StringUtils::secondCase("yassine");
echo "\n";
