<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BeersTableSeeder extends Seeder {

	public function run()
	{
        $beer = new Beer;
        $beer->beer_name="Evil Owl American Amber";
        $beer->beer_style="Amber";
        $beer->abv="5.24";
        $beer->description="blah blah blah";
        $beer->brewery_id="1";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Shady Oak Blonde Ale";
        $beer->beer_style="Ale";
        $beer->abv="4.45";
        $beer->description="blah blah blah";
        $beer->brewery_id="1";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Woodcutter Rye IPA";
        $beer->beer_style="IPA";
        $beer->abv="6.55";
        $beer->description="blah blah blah";
        $beer->brewery_id="1";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="210 Ale";
        $beer->beer_style="Ale";
        $beer->abv="6.1";
        $beer->description="A beer crafted with our hometown of San Antonio in mind, our 210 Ale is a delicate, lightly sweet ale with a clean, crisp finish and can be enjoyed year round.";
        $beer->brewery_id="2";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Fire Pit Wit";
        $beer->beer_style="White";
        $beer->abv="5.25";
        $beer->description="The Fire Pit Wit is a refreshing and flavorful Belgian-style witbier made with fresh ginger root, coriander, fresh Texas Red grapefruit peel, and orange peel.";
        $beer->brewery_id="2";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Slippery Rock IPA";
        $beer->beer_style="IPA";
        $beer->abv="7.1";
        $beer->description="A smooth, balanced beer with an assertive citrusy hop profile, a touch of caramel sweetness and color, and an appropriate malt backbone to support it.";
        $beer->brewery_id="2";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="El Robusto Porter";
        $beer->beer_style="Porter";
        $beer->abv="7.4";
        $beer->description="A robust porter, the initial taste brings pleasant chocolate and roasted coffee flavors and is bold yet creamy. As it warms, it opens up to a pronounced sweetness and rich caramel note.";
        $beer->brewery_id="2";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="El Gourdo Pumpkin Porter";
        $beer->beer_style="Porter";
        $beer->abv="6.2";
        $beer->description="El Gourdo is the second brother in our 'Three Brothers' Porter series. Using a variant of our El Robusto Porter as a base, we peeled, cut and cubed over 200 pounds of fresh pumpkins and added a seasonal blend of spices to the mix. The mouth-feel is smooth and creamy, the aroma is rich spiced pumpkin and the taste deceptively dessert like.";
        $beer->brewery_id="2";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Headlights IPA";
        $beer->beer_style="IPA";
        $beer->abv="6.7";
        $beer->description="Brewed in collaboration with friend and home brewer Vera  Deckard, Headlights IPA is brewed in honor of Breast Cancer Awareness. A percentage of every pint sold will be donated to this cause. The centerpiece to this IPA is the New Zealand Nelson Sauvin hop. The Sauvin in the name comes from the Sauvignon Blanc type flavors imparted by the hop. White wine and citrus fruitiness, a crispness and slight minerality move this IPA out of the typical hop bomb realm and into an area of universal appeal across palates.";
        $beer->brewery_id="2";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Alamo Golden Ale";
        $beer->beer_style="Ale";
        $beer->abv="5.1";
        $beer->description="blah blah blah";
        $beer->brewery_id="3";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Texican";
        $beer->beer_style="Lager";
        $beer->abv="4.0";
        $beer->description="South Texas lager. This lager's dry, crisp & mild flavors will leave you thirsty for more!";
        $beer->brewery_id="4";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Flying Pig Extra Pale Ale";
        $beer->beer_style="Pale Ale";
        $beer->abv="5.0";
        $beer->description="Refreshing, beautifully hopped, well balanced light colored ale.";
        $beer->brewery_id="4";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Cinco Peso";
        $beer->beer_style="Pale Ale";
        $beer->abv="5.0";
        $beer->description="Well balanced, highly hopped American ale. An excellent example of a big-flavored craft beer with the sharp, clean & floral finish of cascade hops.";
        $beer->brewery_id="4";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Pilsner";
        $beer->beer_style="Pilsner";
        $beer->abv="4.4";
        $beer->description="Made with domestic ingredients, this tasty and refreshing brew is crafted in the style that originated in the Czech Republic.";
        $beer->brewery_id="4";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Lucky Ol' Sun";
        $beer->beer_style="Ale";
        $beer->abv="5.5";
        $beer->description="Named after a traditional working man’s song covered by Johnny Cash and others, Lucky Ol’ Sun is a light, approachable, patio beer. It’s a pale golden Belgian-style ale brewed with Pilsner malt, Belgian candi sugar, Kent Goldings hops, and a little Texas honey. Light bodied and dry, this delicious golden brew delivers flavors and aromas of apple, pear, and honey with hints of banana and peach and a soft cereal graininess. At 5.5% ABV it is very drinkable and refreshing.";
        $beer->brewery_id="6";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Oatmeal Pale Ale";
        $beer->beer_style="Pale Ale";
        $beer->abv="5.8";
        $beer->description="A central Texas take on the classic American style, Ranger Creek OPA is an American Pale Ale at heart that has new dimensions of flavor imparted by oats. It has smooth, sweet, and toasty malt flavors with an underlying creamy nuttiness from the oats. The malt profile is balanced nicely by U.S. grown Centennial and Amarillo hops. The nose and finish are full of toasted coconut, pineapple, lime zest, apricot, and herbaceous spice, making this beer pair well with Thai food, a juicy hamburger with sharp cheddar, and oatmeal cookies.";
        $beer->brewery_id="6";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="Mesquite Smoked Porter";
        $beer->beer_style="Porter";
        $beer->abv="6.4";
        $beer->description="Influenced by the classic Bamberg rauchbiers, our Mesquite Smoked Porter is brewed with a Texas twist, using malt smoked in-house over Texas mesquite. This dark mahogany porter has a velvety mouthfeel, and a roasty, dark chocolate flavor balanced with a subtle hop spice. The nose is warm and pleasing with aromas of cured meat, pepper, leather, dark roast coffee, and a distinct mesquite wood aroma. The Mesquite-Smoked Porter’s medium body, rich complex taste of roasted grains, coffee, dark chocolate, and meaty, smoky character make this perfect for any Texas day, be it the cold of winter, or the accompaniment to a summer barbecue. It pairs wonderfully with flourless chocolate cake, mousse, Texas barbecue, roasted and cured meats, earthy vegetables, and blue and smoked cheeses.";
        $beer->brewery_id="6";
        $beer->posted="1";
        $beer->save();

        $beer = new Beer;
        $beer->beer_name="La Bestia Aimable";
        $beer->beer_style="Ale";
        $beer->abv="9.4";
        $beer->description="In 1685, the explorer La Salle claimed Texas in the name of France, landing at Matagorda Bay on a ship called the Aimable. In honor of Texas’ French and Mexican heritages, we created a complex Belgian-style ale with a name to match: La Bestia is Spanish for “The Beast,” while Aimable is French for “friendly.” This devilishly friendly dark strong ale has a rich, complex nose of deep berry and fig with cinnamon, nutmeg, and black pepper spicy notes, and a superbly drinkable body full of rich, dark fruit flavors. The use of Texas honey and a well attenuated body in the Belgian abbey tradition make this beer superbly drinkable despite its high alcohol content. La Bestia Aimable pairs well with carbonade, lamb, game and fowl, rich cheeses such as triple-crème and Gorgonzola, as well as decadent desserts like sticky toffee pudding, dark chocolate and raspberry cake, and tiramisu.";
        $beer->brewery_id="6";
        $beer->posted="1";
        $beer->save();
	}

}
