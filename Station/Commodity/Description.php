<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Commodity;
use         EDSM\Alias;

class Description extends Alias
{
    static protected $defaultName       = null;

    /**
     * List of description used in game
     */
    static protected $name  = [
        // Chemicals (1)
         101        => 'Produced by: High Tech (Surface) and Refinery <br />
                        Consumed by: Extraction<br />
                        <br />
                        Chemical explosives are used extensively in extraction to gain access to valuable mineral deposits.',
         102        => 'Produced by: All<br />
                        Consumed by: All<br />
                        <br />
                        Hydrogen fuel is used in high power systems, from ships\' drives to weapons to powering the energy needs of stations and surface cities. Using high pressure and temperature, hydrogen is fused into helium in a simple reactor.',
         103        => 'Produced by: Agricultural<br />
                        Consumed by: Refinery<br />
                        <br />
                        This is an organic oil that is a useful raw ingredient for producing a wide range of synthetic materials from plastics to ceramics. It is derived from the decay of organic materials, and can often be found beneath the ground on outdoor worlds. Surprisingly, mineral oil was burnt for energy on ancient Earth.',
         104        => 'Produced by: High Tech<br />
                        Consumed by: Agricultural<br />
                        <br />
                        Pesticides are targeted engineered substances, created to disrupt a particular part of the biological processes within a given organic pest. Used on Agricultural worlds to reduce pest damage to crops or livestock.',
         105        => 'Produced by: Refinery (Surface) <br />
                        Consumed by: High Tech and Military<br />
                        <br />
                        A selection of inorganic molecules used in the creation and manipulation of a wide range of organic compounds.',
         106        => 'Produced by: Refinery (Surface) <br />
                        Consumed by: All (Surface) except Refinery <br />
                        <br />
                        Unique polymer that is injected into the surrounding rock providing a stable environment for construction.',
         107        => 'Produced by: Refinery (Surface) <br />
                        Consumed by: High Tech (Surface) and Military<br />
                        <br />
                        Used in medical research, but because of the potential to be weaponised, it is a controlled substance in many jurisdictions.',
         108        => 'A truly organic pest eradication tool, these sterile plants can only be grown from cuttings. Their pollen is lethal to most insectoid life forms. Historically it used their bodies as a host to germinate. Note this may cause hallucinations if workers are over-exposed.',
         109        => 'Engineered to order, Toxandji Virocide can be created to target whatever pest or parasite is effecting your crops. This highly intelligent virus can be programmed to self-terminate at the end of a season, or to hibernate in preparation for the next cycle.',
         110        => 'For earth shattering displays that will blow your mind. Perfect for atmospheric use, or deployment from orbit! Official suppliers to the Imperial Family',
         111        => 'The high phosphorous content of this powerful pesticide is highly effective, but can cause a number of highly dangerous side effects. This has led to some governments classifying it as a chemical weapon, and many independent agricultural worlds taking legal action against the producer after cattle and workers have been left maimed.',
         112        => 'This exotic fertiliser is made from the crushed bodies of the native life forms siphoned from the nearby gas giant\'s vast ammonia oceans in unsustainable quantities. It is reported to have invigorated even the most barren and arid of soils, but has also proved to be lethal to some crops.',
         113        => 'Produced by: Agricultural and Extraction (Surface)<br />
                        Consumed by: All but Agricultural and Extraction (Surface)<br />
                        <br />
                        H2O. A chemical compound that is vital to human life and useful in a number of industrial processes.',
         114        => 'Produced by: Mining only<br />
                        Consumed by: Refinery and Industrial<br />
                        <br />
                        Hydrogen Peroxide, H2O2, is the simplest peroxide and has a number of uses as a reacting agent in chemical processes.',
         115        => 'Produced by: Refinery<br />
                        Consumed by: Industrial<br />
                        <br />
                        Oxygen that has been cooled to the point of condensation. Useful in cryogenics, or to oxidise other substances.',

        // Consumer Items (2)
         201        => 'Produced by: Industrial<br />
                        Consumed by: All<br />
                        <br />
                        Even in the 34th century, fashion is continually changing, driving purchases of new clothing for those with some credits to spare.',
         202        => 'Produced by: High Tech<br />
                        Consumed by: All except High Tech<br />
                        Illegal in prison colonies and theocracies.<br />
                        <br />
                        Ever-evolving and changing, get on board for the next generation of personal consumer devices. Be the envy of your friends as you show off the latest thing, then get ready to upgrade.',
         203        => 'Produced by: Industrial<br />
                        Consumed by: All<br />
                        <br />
                        For every household task, there are any number of domestic appliances fighting for the consumers\' attention and credits.',
         204        => 'Produced by: High Tech<br />
                        Consumed by: All (Surface) except High Tech<br />
                        <br />
                        A lightweight robust unit that can be deployed to provide shelter, basic food and air for up to a month in the event of structural failure or meteor impacts on habited builds. They are also used by survey teams on long expeditions.',
         205        => 'Micro-thin sheets that are absorbed into the skin. A mixture of bioengineering and micro-electronics allow the user to programme art on their skin that reacts to their surroundings and mood. The Body Décor company of Alacarakmo has specialised in this for hundreds of years.',
         206        => 'In an age of manufactured goods, many prefer the expensive tradition of making things by hand. Eleu hand-knitted thermals, made from their own wool, are the survival underwear of choice for cold climates.',
         207        => 'An anachronistic homage to a more civilised age becomes a symbol of wealth and tradition. Suppliers to the Empire and beyond.',
         208        => 'Despite the vagaries of fashion, Karetii Couture is always ahead of the curve, and so are the prices. Many people question the value and the practicalities of these items and yet they still maintain a vice-like grip on the public\'s imagination and credits.',
         209        => 'The Saddlers of Njangari are renowned for their leather work, and their motto: No job to big or too invertebrate. Whether simple domestic supplies or custom saddles and tack for some of the more exotic species in the galaxy, they are the very best.',
         210        => 'Kinago is famed for its Luthiers producing the finest Violins and other stringed instruments. They are highly prized by both musicians and collectors throughout the galaxy.',
         211        => 'Local craftsmen are specialists in bringing the past into your life. Made from authentically accurate materials, each bears the mark of distinction.',
         212        => 'Multipurpose stoves that can be operated using almost any fuel. Used on many frontier worlds where other technology cannot be relied on or just does not work. Galactic heritage approved. The famed rustic designs are in use on camp fires throughout the galaxy.',
         213        => 'The original and best, turning all your waste into a nutritious and wholesome paste.',
         214        => 'These strange sculptures are believed by some to have been created by an extinct sentient race. Others have theorised that the sculptures are natural formations caused by local weather patterns. Most economists agree that there are massive profits to be made from the gullibility of wealthy collectors.<br />
                        <br />
                        This rare good is legal in all systems.<br />
                        <br />
                        Please note that if a system\'s controlling faction changes, some formerly legal rare goods may become illegal in that system. If this happens, the rare goods in question will no longer be available for sale or purchase.',
         215        => 'Re-live your dreams! This device can record, consolidate and replay the neural activity of dreams, allowing you to re-experience them whenever you desire, or even share your dreams with friends!',
         216        => 'This entertainment device uses concentrated radiation bursts to detect the desires of the player and automatically creates a game with every feature they could desire. Each unit is unique, and will self customise to represent its owner. Use of another person\'s puzzle box is considered a great social faux pas.',
         217        => 'Have you ever wanted to fly? Uzumoku Low-G Wings provide you with enough lift and thrust to soar like a bird, and are practical and stylish with their discreet shoulder mounted unit! Sadly they can only function in suitable low G environments',
         218        => 'A small colony of brightly coloured micro-organisms form a mesmerising, ever changing decorative fashion statement. Capable of self sustaining, the colony will feed on dirt and skin flakes, keeping the wearer clean and healthy. When mature, the micro-organisms lose their bright colours and excrete a heady natural perfume.',
         219        => 'A small soft-furred quadruped that stains its multi-coloured fur sludge brown when it dies - an action that this highly nervous creature is pre-disposed to do at the drop of a hat. Professional comforters must work day and night to keep this creature from inducing a heart attack. The meat is extremely bitter, but they have found a niche as an expensive accessory.',
         220        => 'Stick anything to everything with this natural glue, made from the cocoons of an indigenous insects. It is non-toxic and can be easily removed using a resin secreted by the queen ant.',
         221        => 'Famed for its inability to hunt through water, it makes such lifelike duck calls that some interesting cross breeds are now being researched.',
         222        => 'Advertised as genuine fossilised xeno ovum, scientists were quickly able to show that the eggs traded are actually the product of a team of highly talented prop designers. For some collectors, owning one of these eggs is their top priority, with all other priorities rescinded.',
         223        => 'Specially engineered vines weave fine lace into intricate natural patterns. These highly fragile plants work slow and die if taken from their native environment.',
         224        => 'A pocket-sized one shot distillery, hand crafted by the legendary Cyborg bartender Jaques. This device is capable of turning almost any combination of liquids into 10ml of highly concentrated alcohol in just 3 minutes.',
         225        => 'A slab of unidentified material covered in pictographs of an unknown origin. This relic is part of a cache of similar artefacts that were uncovered by explorers researching lost alien civilisations in the Soontill system. Sold by Garry\'s Reclamations, Cheranovsky City, Ngurii.',
         226        => 'Delivered over vast distances by those in search of a profit, the Hutton Mug is only sold to commanders who make the painfully long journey to Hutton Orbital. Made from the salvaged frame shift drive plates of ships that run out of fuel before reaching the station, this is purely a vanity item commemorating the epic journey. Its value lies in its rarity and latent frame shift energies keeping your drink that little bit warmer for the journey.',
         227        => 'Transparent spheres crafted from the finest crystal and containing a clear liquid full of snow that swirls when shaken.',
         228        => 'Produced by: Industrial<br />
                        Consumed by: All (Surface) except Industrial<br />
                        <br />
                        A selection of absolute essentials needed to survive in extreme conditions.',
         229        => 'These new processor prototypes have already demonstrated their versatility and capability. The combination of organic and nano-fabrication makes them difficult to manufacture.',
         230        => 'Colourfully wrapped presents for both the naughty and nice, although those for the nice do appear to be bigger!',
         231        => 'Named after its discoverer\'s late baby daughter, this rare and delicate member of the Orchidaceae family is famed for its short but spectacular flowering and for its exquisite aroma which lingers long in the memory after the flower itself has faded.',
         232        => 'These strange sculptures are believed by some to have been created by an extinct sentient race. Others have theorised that the sculptures are natural formations caused by local weather patterns. Most economists agree that there are massive profits to be made from the gullibility of wealthy collectors.',
         233        => 'Double-sided drinks mats originally commissioned in 3302. One side bears the Buckyball Racing Club logo with the slogan "Win it or bin it" while the other reads "Celebrating 10000 rescues" and depicts the mascot of the Fuel Rats.',
         234        => 'These robust personal computing devices, manufactured by technology company Herculean Machines, are used throughout the galaxy.',

        // Legal Drugs (3)
         301        => 'Produced by: Agricultural<br />
                        Consumed by: All<br />
                        Illegal in prison colonies and Federal theocracies.<br />
                        <br />
                        Traded under a variety of brands. A very mild narcotic. Occasionally illegal due to its association with antisocial behaviour, but also widely consumed in many cultures.',
         302        => 'Produced by: Agricultural and Industrial<br />
                        Consumed by: All<br />
                        Illegal in prison colonies and Federal and Alliance aligned theocracies.<br />
                        <br />
                        A range of luxury drinks made from distilled, fermented grains and fruits, usually containing a high percentage of alcohol. The narcotic effect means it is illegal in some jurisdictions.',
         303        => 'Produced by: Agricultural, High Tech and Industrial<br />
                        Consumed by: All except High Tech and Industrial<br />
                        Illegal in all but anarchies and dictatorships.<br />
                        <br />
                        Synthetically created substances tailored to create mood enhancement in a human. Widely outlawed due to their addictive nature, and the resultant longer term effects on human consumers.',
         304        => 'Produced by: Agricultural<br />
                        Consumed by: All<br />
                        Illegal in Imperial prison colonies and corporate markets. Also illegal in most Federal worlds and independent theocracies and corporate governed worlds.<br />
                        <br />
                        A naturally occurring plant the leaves of which, when dried and shredded, are a source of nicotine, a mild and expensive organic narcotic. Usually chewed or smoked, and used in ancient rituals. Illegal in many jurisdictions.',
         305        => 'Produced by: Agricultural<br />
                        Consumed by: All<br />
                        Illegal in prison colonies and Federal aligned theocracies.<br />
                        <br />
                        A luxury drink made from fermented fruits containing alcohol, a mild narcotic, and grown organically. Occasionally illegal because of the alcohol content.',
         306        => 'Created to celebrate 30 years of Eranin independence, this special whisky has a very limited supply and is expected to increase in value over time.',
         307        => 'A genetically altered strain of the Onionhead flower, chemically changed to circumvent federal laws. This strain has been designed to survive in harsher climates, but its seeds contain the same well-known psychedelic narcotic. Federal lawmakers are working fast to legislate against this new breed.',
         308        => 'A programmable narcotic created in small batches and pre-programmed to provide whatever experience the client wishes to hallucinate. Usually this drug is created only on a bespoke order from a known client, but some worlds are willing to sell Pre-programmed samples on the general market.',
         309        => 'The Onionhead flower is native to HIP 55118, and its seeds contain the well-known psychedelic narcotic. Illegal in most jurisdictions.',
         310        => 'Guaranteed genuine non-synthetic tobacco. Fully certified as organic. The only harm done is to yourself.',
         311        => 'Made from crushed beetles, this mild euphoric drug has a number of side effects including turning the whites of addicts\' eyes a subtle shade of green. Widely illegal, but favoured in many anarchic systems where the green eyes are seen as a badge of an extreme lifestyle.',
         312        => 'A synthetic psychoactive drug based on a closely guarded secret recipe. While active, it causes the user to lock their teeth together and rapidly exhale, a reaction that led to its street name, Fesh. There are many poor imitations but Wolf 1301 Fesh is the original and remains the most expensive due to its consistent quality. Banned in most jurisdictions.',
         313        => 'Not strictly a beer, this light alcoholic beverage is made from fermented frog spawn which is then filtered through rush mats.',
         314        => 'Produced by: Salvage and Refinery (Surface) <br />
                        Consumed by: Orbital Extraction, Industrial and Refinery<br />
                        <br />
                        Unregulated alcoholic substances which are typically made through home or small scale production methods, with varying levels of toxicity.',
         315        => 'A highly valued liquor from the old world of Lave. Using ancient breeds of grains grown in its tropical climate under a permit from the government, the distillate is kept in old Earth oak barrels and held in an orbital maturing facility for decades to achieve maximum richness.',
         316        => 'This infamous drug grown exclusively on 16 Lyrae 5 is still the narcotic of choice for overpaid celebrities and the super-rich. It has almost become more of a status symbol than a recreational drug.',
         317        => 'The hops of Kongga provide a deep, satisfying flavour to the locally brewed ale, but seem to wither and spoil rapidly when removed from their native climate. Due to this, Kongga Ale is renowned for its authentic flavour and traditional production methods. Served at room temperature with a decorative umbrella.',
         318        => 'Traditional cure-all and cocktail ingredient. The venom of the snake entombed in the bottle adds to the intoxicating effect of the drink.',
         319        => ' A curious mix of fermented Thrutis Giant Rat milk and raw turtle egg yokes produces a potent mix similar to Ancient Advocaat. Each bottle is provided with a ceremonial tasting spoon, to ease the pouring of this viscous but delicious drink.',
         320        => 'Providing the biggest cigars in the galaxy, hand-rolled and ready to smoke right out of the box. Specially treated to allow safe smoking even in the cockpit without overloading your life support module. The best way to end your days.',
         321        => 'A native plant that exhibits similar properties to tobacco, but without the harmful effects. Discovered by observing its effects on the local fauna.',
         322        => 'Wines from Aegaeon are some of the most valued and prized possessions in the galaxy. In great demand in wealthy systems, these wines are purchased for large sums, but rarely actually drunk.',
         323        => 'A near perfect replication of the famed 2093 vintage wines produced on ancient earth. That year\'s wine was universally declared the best ever produced, and has yet to be topped. Scientists on Hill Orbital station were able to replicate the famous wine, and now guard the secrets of their formula with great care.',
         324        => 'This chemical distillate is almost pure alcohol, but with subtle, prized flavours. Often used as an ingredient in more dangerous cocktails. The exact details of the distillation process are a closely guarded secret.',
         325        => 'There may be no sound in space, but Geawen Dance Dust will bring the music inside your cockpit, and inside your head. You literally won\'t be able to stop dancing!',
         326        => 'Geras 3 A supports life in the form of large algae like plankton, whose bioluminescent digestive system excretes a complex protein that can be used in the brewing process. The resulting beer is famous for its strength, heady aroma and luminescent colour.',
         327        => 'The use of \'donated\' human bodily fluids in the distillation process for this potent liquor causes a strong variation in flavours from vintage to vintage, and widespread outcry about the ethics of the production. The producers of the drink report that each slave used agrees to the extraction process, but this has not stopped some having a bitter taste left in their mouths.',
         328        => 'Native to the harsh desert climate, these unpleasant creatures will burrow into any soft surface, including flesh, to avoid the hot sun. Their resemblance of a walking human ear lead to their name. Some slavers use these grubs as a restraining device for their captives, attaching a dormant extra ear to the forehead of their slave that can be remotely triggered.',
         329        => 'Originally used as a medicine to revive those who have suffocated in dust storms, the restorative effects of this potent drink are almost as famous as the hangovers.',
         330        => 'Leestian evil juice acquired its name from local security forces, claiming that those intoxicated with this powerful liquor seem to be possessed with a pure evil.',
         331        => 'Harvested from native mammals found in Leesti, this highly nourishing and rehydrating drink is favoured on arid and desert worlds.',
         332        => 'A new and improved strain of the famous Onionhead narcotic.',
         333        => 'An adapted strain of the Onionhead narcotic favourable to local conditions.',
         334        => 'Based on a secret 24th Century recipe taken from the log of one Captain Smolenski, Harma Silver Sea Rum has been developed by blending a range of rare alcohols to create a beverage any corsair would be proud of. The Harma Silver Cartel, who manufacture and distribute the potent brew, enjoy the controversy their product has gleaned after it became a favourite among pirate gangs across the galaxy.',
         335        => 'A variant of the synthetic psychoactive drug based on a closely guarded secret recipe. While active, it causes the user to lock their teeth together and rapidly exhale, a reaction that led to its street name, Fesh. This variant was created from a stolen recipe for Wolf 1301 Fesh and is the closest Fesh variant in terms of quality to the original. Banned in most jurisdictions.',

        // Foods (4)
         401        => 'Produced by: Agricultural<br />
                        Consumed by: Industrial and Military<br />
                        <br />
                        Algae are a range of biological organisms grown in water. Considered edible and often locally produced to sustain life in many poorer outposts. Usually commercially processed to provide more appetising foodstuffs as a constituent of food cartridges for \'chefs\' (cheap 3D food printers).',
         402        => 'Produced by: Agricultural<br />
                        Consumed by: All except Agricultural<br />
                        <br />
                        Flesh - and other elements - harvested from a vast selection of once-living creatures. In many places a luxury item with some ceremonial importance. Illegal in some jurisdictions.',
         403        => 'Produced by: Agricultural<br />
                        Consumed by: All except Agricultural<br />
                        <br />
                        A good source of caffeine to fuel the creative economies. Many attempts have been made to supplant it but all inevitably fail. Some claim the archaic ritual of grinding beans is a key part of the experience.',
         404        => 'Produced by: Agricultural<br />
                        Consumed by: All except Agricultural<br />
                        <br />
                        Flesh from once-living aquatic organisms sold as food. Illegal in some jurisdictions.',
         405        => 'Produced by: Industrial<br />
                        Consumed by: All except Agricultural and Industrial<br />
                        <br />
                        Cartridges for \'chefs\' (cheap 3D food printers). These dehydrated components are reconstituted into a variety of shapes using a 3D printing technique. Components are mixed with water and flavourings as they are printed, according to the desired food item template for colour, texture and taste. \'Burgers\' and \'Hotdogs\' are common standard template choices for most chefs.',
         406        => 'Produced by: Agricultural<br />
                        Consumed by: All<br />
                        <br />
                        A diverse selection of plant-based produce, usually grown in bulk on outdoor worlds, used by the luxury food industry and for direct consumption by the population.',
         407        => 'Produced by: Agricultural<br />
                        Consumed by: All except Agricultural<br />
                        <br />
                        Inexpensive and intensively grown in various forms on many outdoor worlds. Mainly consumed as bread but also forms a key constituent of many industrially produced foods.',
         408        => 'Produced by: High Tech<br />
                        Consumed by: All except High Tech and Agricultural<br />
                        <br />
                        Meat that is synthesised on an industrial scale. The process relies on DNA from species from old Earth. The DNA is adjusted so muscle tissue is grown in huge quantities without the rest of the animal.',
         409        => 'Produced by: Agricultural<br />
                        Consumed by: All except Agricultural<br />
                        <br />
                        Used ceremonially as well as for its stimulant effects. Tea remains a beverage with historic roots and there is great rivalry between those who drink tea and those who drink coffee.',
         410        => 'A wide range of strong-tasting exotic meats native to HIP 10175, famed for its hunting and natural environment. One commonality between all the available species is a strange spicy flavour. This is believed to be due to the rich local ecosystem. Restricted trade has brought high prices.',
         411        => 'Specially adapted to the cold climate, these enormous animals, originally created from modified genetic material from ancient Earth, are now flourishing on Quechua. The albino form has been encouraged to dominance due to the tenderness of its flesh.',
         412        => 'These eggs have been buried deep in the highly alkaline Utgaroarian soil around its many active geysers, where they are slowly cooked by the natural heat of the planet to take on a distinctive purple colour and their prized bittersweet taste.',
         413        => 'A traditional breed from the Tajima strain of wagyu cattle in Kobe in Japan on ancient Earth, they remain the most pampered cattle in human space. Taken from Kobe before the Earth\'s serious environmental decline, the cattle are hand-fed a secret mix of rare grains and are brushed daily. Now unique to Witchhaul, this is one of the most prized meats there is.',
         414        => 'Prized for their uniquely sweet flavour caused by the native fungal parasites that infest them.',
         415        => 'Despite appearances, the species discovered on Irukama are not strictly snails. These indigenous creatures almost destroyed Irukama\'s native habitat after their sole predator was culled, due to the threat it posed to human settlers. Now actively managed, the surplus stock is sold on as a delicacy. The meat from a single snail can easily fill several standard-size cargo canisters.',
         416        => 'Vacuum Krill are astonishing creatures. One of the few species to live in the hard vacuum of space, they are native to the ice rings around Baltah\'sine 4b. Their eggs grow in vast numbers in tiny water pockets within the rocks - kept liquid by secretions from the mother when the eggs are first laid. When mature, they eventually burrow their way out, propelling themselves between rocks with tiny excretions of fluid, in search of a mate.',
         417        => 'For years 47 Ceti suffered from rodents, introduced from Earth, decimating crops. However, they have turned this to their advantage and now farm them in great numbers as the local environment makes the meat curiously sweet.',
         418        => 'Once sneered at as a cheap substitute, this product has gained cult status from its overly thick texture and bitter flavour from the roots and herbs that it is made of. It is an acquired taste that now appeals to the bohemian set.',
         419        => 'The coffee beans are mellowed in the digestive tract of the indigenous giant cats, making for a distinctive and unique aftertaste. Many have tried to emulate this chemically and physically, however the results to date have been inferior if not disastrous.',
         420        => 'This once traditional coffee substitute leapt to fame when the Emperor Hengist Duval gave it his seal of approval.',
         421        => 'A unique mix of zooplankton and phytoplankton from the rich and varied oceans of Chi Eridani. Due to the automated trawling process, it may include any number of other marine creatures that happened to wander into the processor.',
         422        => 'After being discovered in an ancient gene bank, the last of the cryogenically stored sturgeon eggs were purchased for an undisclosed, but reliably enormous sum. After a long search for an appropriate environment, they were introduced to the waters of Esuseku, and to their owner\'s relief, hatched and established a breeding colony. These ancient fish continue to thrive in the waters of Esuseku making them the primary producer of caviar in known space.',
         423        => 'Harvested from hydrothermal vents and prized for the sulphurous salty flavour. They are best eaten live to ensure freshness.',
         424        => 'Oysters have been one of the more successful adaptors to other worlds with their rapid genetic modification. Due to the chemicals in the water, the oysters of Helvetitj produce a range of vividly coloured but natural pearls which are in high in demand for decorative purposes, but are valued as a food source as well.',
         425        => 'Though there is no genetic link between the huge creatures of HIP 41181 and the now-extinct squid once found on ancient Earth, the evolutionary similarities are remarkable. Perhaps they share some ancient space-faring ancestor. There was much protesting at the use of these animals as food. Claims of sentience still remain high on the agenda for those trying to stamp out the trade.',
         426        => 'Spongiform Victuals have been a staple food of the Imperial military for years. Many have tried to create copies of the nutritious formula, but it seems only to thrive in the vast damp caves of Coquim. The ingredients are a tightly held secret, and some suggest that it contains addictive substances.',
         427        => 'A native plant that bears fruit resembling an apple with a silver lustre. Originally inedible, but through genetic modification the neurotoxins have been stripped away leaving what is now seen as a delicacy.',
         428        => 'This native plant form produces clear red fruit with a unique flavour. The plant is carnivorous and the berries contain blood plasma from its victims which is said to be an aid to slimming.',
         429        => 'Due to the relaxation of various genetic modification laws, Ochoeng prides itself on having produced the galaxy\'s hottest chilli pepper. There have been numerous calls to reclassify the substances as toxic, however the produce remains legal in most systems.',
         430        => 'More of a lichen than the fungus that they resemble. They have a similar musty flavour to ancient Earth truffles, but the process of metabolising Deuringas\'s metal-rich rocks leaves trace amounts of metals on its surface - which is why Deuringas truffles must be shaved in preparation for eating.',
         431        => 'This blood-red grain-like plant sometimes know an Mars Grass has proven itself to be terribly invasive and highly aggressive to all other plant types. For this reason, its growth is now restricted to HR 7221. Its restriction has proved a blessing as its unique colouring and flavour are in demand in exotic cookery.',
         432        => 'Grown in the paddy fields of Jaroua, bioengineered filter fish are used to remove any pests or parasites attached to the plant. It is hand-planted and hand-picked by specially engineered robots.',
         433        => 'One of the most inventive of synthetic meat specialists, growing the meat into fabulous sculptures of flesh \'grown on the bone\'.',
         434        => 'These tea buds have to be hand-plucked from the dangerous Ethgreze Carnivorous Camellia Sinensis plants. Only those with sharp reflexes make it through their first season without losing fingers or entire hands to the deadly fast plants. Due to the danger in collecting it, this tea is famously expensive.',
         435        => 'Super-fine green tea. Powdered for use in tea ceremonies, this brew is often used to seal treaties and business deals. It is traditionally ground on granite mills by specially selected millers, chosen for their moral purity.',
         436        => 'An infusion of native herbs renowned for its sedative effects.',
         437        => 'Originally referred to as Elephant birds, these behemoths were brought out of extinction using preserved genetic material found on ancient earth. With some careful genetic modification (before the process of gene modification was outlawed), they were adapted to thrive in the dense, oxygen-rich Cetian atmosphere. They lay prized eggs with a circumference of over a metre.',
         438        => 'Brewed over a low heat for days, this tea is comprised of fine mineral shavings, rather than traditional leaves. This mineral based tea is high in salts and nutritious metals. Over consumption of this has been known to temporarily cause the drinker\'s skin to take a metallic hue.',
         439        => 'Brewed using particularly robust beans, the flavour and caffeine is extracted from the beans using custom technology. Harnessing the power of the vacuum of space to enrich comet water, the method creates a beverage noted for its potency.',
         440        => 'Created by combining the DNA of the universe\'s sweetest crops, to create the sweetest substance of them all. It turns out it\'s highly addictive!',
         441        => 'Mechucos high tea is so named for the dizzying highs caused by its consumption. Most users recommend restricting consumption to specific times of the day, and only with a side plate of restorative sandwiches and cakes.',
         442        => 'Marketed as "the galaxy\'s most dangerous cereal", with a tag line imploring the consumer to "eat it before it eats you", Beast Feast claims to contain trace elements of over two hundred and twenty three confirmed man-eater species, allowing consumers to "eat their way to the top of the food chain".',
         443        => 'The chitinous native insects of nearby worlds are processed using industrial mining equipment, then re-constituted into convenient circles. Marketed as a food for those who like a little crunch.',
         444        => 'The fungal life forms found in Mulachi can grow to occupy entire continents! Specially trained teams are sent to the planet\'s surface to industrially harvest large portions of the fungal structures, but workers must be wary of the deadly fungal spores.',
         445        => 'These cakes were originally used as packing material for expensive machinery, but when plant owners realised they were edible, they soon became the workers staple diet. The wheat cakes produced today are made using the traditional recipe.',
         446        => 'The monastic orders of Arouca live a secluded and peaceful life producing, among other things, a limited range of Conventual sweets. Each comes with a personalised blessing.',
         447        => 'This drink is so high in caffeine and natural sugars that it is often classed as a narcotic. The addictive properties and resulting sleep deprivation are famed.',
         448        => 'This grub was introduced to the system from Lave, in an attempt to create a wildlife reserve for endangered species. Unfortunately the grubs mutated and evolved in their new environment, and the project failed. The evolved grubs were found to have a delicious flavour and surprising texture, and have since become a delicacy.',
         449        => 'This ancient corn-like crop is harvested manually to preserve the dust-like coating on the seeds. This dust is traditionally snorted from the corn as a chef\'s treat.',
         450        => 'These tough, limpet like creatures were originally thought to be inedible. However, pioneering colonists discovered that a combination of high pressure and chemical treatment in an ammonia-based solution could render these iron rich creatures into a digestible and delicious food source. They are now considered a delicacy around their galaxy.',

        // Industrial Materials (5)
         501        => 'Produced by: Refinery<br />
                        Consumed by: Military, Terraforming and Industrial<br />
                        <br />
                        Polymers are materials made of long chains of molecules. They are synthesised from mineral oil in refineries, and then used by industry to manufacture a very wide range of goods.',
         502        => 'Produced by: Refinery<br />
                        Consumed by: Terraforming and Industrial<br />
                        <br />
                        Extremely pure semiconducting crystalline materials are used extensively in the electronics industry.',
         503        => 'Produced by: Refinery<br />
                        Consumed by: Terraforming, High Tech and Industrial<br />
                        <br />
                        Complex highly pure alloys have zero resistance to electricity below a certain temperature. Such superconducting alloys are used in High Tech and Industrial economies to create a wide range of devices.',
         504        => 'Meta-alloys have a complex lattice structure with large internal voids. They are cellular in nature, and formed organically. They are incredibly strong – much stronger than foamed aluminium for example. Many elements form the structure so technically they are alloys, but the composition is different in different parts of the cell walls for strength. They are good thermal insulators, and have a high melting point, but if they are melted they lose all their special properties and become a conventional alloy. They are easily machined, but as yet cannot be manufactured and are only found in space. They are associated with recently discovered alien entities nicknamed \'Large Barnacles\' by interstellar explorers. These appear to be common in certain parts of space, although no-one is certain why. This material has been heralded as the next step in materials technology. It is ultra-light and stronger and more versatile than most commercially available alloys.',
         505        => 'Produced by: Refinery (Surface) <br />
                        Consumed by: Industrial and High Tech<br />
                        <br />
                        A wide range of engineered materials supporting a broad range of technological and industrial applications.',
         506        => 'The universal lubricator used in construction, machinery and agriculture. It also has a number of domestic applications. Its slogan is: "The lube that keeps the galaxy spinning!"',
         507        => 'Produced by: Refinery (Space) <br />
                        Consumed by: High Tech, Industrial and Military<br />
                        <br />
                        Insulating membranes are used to control heat flow between devices and are typically used for cooling.',
         508        => 'Produced by: Refinery (Surface) <br />
                        Consumed by: High Tech, Industrial and Military<br />
                        <br />
                        CMM composites are layered carbon and metals bonded to take advantage of the properties for each of the different components. These result in flexible, lightweight and strong structures.',
         509        => 'Used by factions as a reward for mission contracts.<br />
                        Consumed by: Industrial and Military<br />
                        <br />
                        High specification cooling hoses used as conduits for fluid or gas based thermal management systems.',
         510        => 'Used by factions as a reward for mission contracts.<br />
                        Consumed by: High Tech and Military<br />
                        <br />
                        Neofabric insulation is a material using complementary fibre structures to retain, or protect from, heat build up.',

        // Machinery (6)
         601        => 'Produced by: Industrial<br />
                        Consumed by: Terraforming and Agricultural<br />
                        <br />
                        Components and consumables for atmosphere processors. These are large installations, usually with a high power output reactor at their cores, used to process and stabilise breathable planetary atmospheres, especially on terraformed worlds.',
         602        => 'Produced by: Industrial<br />
                        Consumed by: Agricultural<br />
                        <br />
                        Agricultural machinery together with spare parts and consumables used for harvesting and packing specific ground-based crops.',
         603        => 'Produced by: Industrial<br />
                        Consumed by: Agricultural<br />
                        <br />
                        A wide range of industrial scale equipment for marine agriculture. Submersibles, feedstock dispersing equipment, fishing equipment, nets and underwater confinements.',
         604        => 'Produced by: High Tech<br />
                        Consumed by: Refinery<br />
                        <br />
                        Bio-engineered microbes that separate specific elements from a powdered ore. Produced on High Tech worlds, their name is historic having replaced thermal furnaces for the refining of many ores.',
         605        => 'Produced by: Industrial<br />
                        Consumed by: Extraction<br />
                        <br />
                        Industrially produced \'grey goo\' microdevices that are injected into minerals to separate specific constituents from mixed ores along grain boundaries. Extraction sites that utilise mineral extractors in their processes are significantly more efficient.',
         606        => 'Produced by: Industrial<br />
                        Consumed by: All except Industrial<br />
                        <br />
                        Industrially produced components for power generators, used throughout human space. Though the Sirius Corporation have a near-monopoly on manufacture of most new larger units, many other companies produce the vast amount of consumables, spares and ancillary parts for them.',
         607        => 'Produced by: Industrial<br />
                        Consumed by: All except Industrial<br />
                        <br />
                        Water purifiers and components and consumables for them. All space installations are reliant on recycled water, so water purification is vital for survival. Some units are set up to medicate the purified water to maintain the correct mood of inhabitants.',
         608        => 'Produced by: Industrial<br />
                        Consumed by: Colony (Surface), Extraction (Surface), High Tech (Surface), Military (Surface) and Tourist (Surface) <br />
                        <br />
                        These draw excess heat from surrounding material to enable habitation in even the most extreme environments.',
         609        => 'Produced by: Industrial<br />
                        Consumed by: All (Surface) except Industrial (Surface)<br />
                        <br />
                        These maintenance and repair packs are used to keep skimmers operational.',
         610        => 'Produced by: Industrial<br />
                        Consumed by: Colony (Surface), Extraction (Surface), Military (Surface) and High Tech (Surface) <br />
                        <br />
                        Allows basic monitoring and integration of the world\'s geology, for both scientific, civic and commercial purposes.',
         611        => 'Produced by: Industrial<br />
                        Consumed by: Colony (Surface), Extraction (Surface), High Tech (Surface), Military (Surface) and Tourist (Surface) <br />
                        <br />
                        These are combined resources and manufacturing devices that are used to build surface structures.',
         612        => 'Guaranteed pollination every time! These miniature drones are supplied in the thousands to ensure crops are fertilised whatever the conditions. Unlike natural bees, they can be used in conjunction with pesticides and can be supplied pre-coated with a choice of growth agents!',
         613        => 'Wulpa Engineering Systems are constantly working to improve and enhance on existing models, with the Wulpa Hyperbore System representing the latest in automated mineral extraction services. ',
         614        => 'Produced under licence, and with the approval of a number of environmental groups, these tanks can be used to create a truly alien habitat capable of sustaining life forms from a variety of non earth like environments. They are available in a number of mind bending shapes.',
         615        => 'This hardy beast of burden is now found throughout human space, especially on the emerging worlds of the outer rim, but naturally bred Verrix are very rare and highly prized.',
         616        => 'Used by factions as a reward for mission contracts.<br />
                        Consumed by: High Tech<br />
                        <br />
                        Articulation motors are used to move components with devices.',
         617        => 'Produced by: Industrial<br />
                        Consumed by: High Tech and Military<br />
                        <br />
                        HN shock mounts absorb vibration and impacts to stabilise the mounted device.',
         618        => 'Produced by: High Tech/Refinery near Akhenaten<br />
                        Consumed by: High Tech, Industrial and Military<br />
                        <br />
                        Emergency power cells used to provide power when the primary power source is unavailable. They can also be used to temporarily increase power output.<br />
                        <br />
                        These can be found at Chadwick Port in the Gladutjin system.',
         619        => 'Produced by: Industrial/Extraction near Lakota<br />
                        Consumed by: High Tech<br />
                        <br />
                        Power converter used to modify and regulate the energy coming from multiple sources so that it is tuned to the optimal operational requirements of all attached devices.<br />
                        <br />
                        These can be found at Shukor Dock in the Perun system.',
         620        => 'Produced by: Industrial/Refinery near Stafkarl<br />
                        Consumed by: High Tech and Military<br />
                        <br />
                        A specialised energy grid assembly for controlling power flow.<br />
                        <br />
                        These can be found at Pailes Enterprise in the 40 Ceti system.',
         621        => 'Produced by: Industrial/Extraction near Cilbien Zu<br />
                        Consumed by: High Tech (Surface)<br />
                        <br />
                        High energy power transfer units used to deliver power where it is needed.<br />
                        <br />
                        These can be found at Haignere Orbital in the Wuthawchu system.',
         622        => 'Produced by: Industrial/Extraction near Heget<br />
                        Consumed by: Military<br />
                        <br />
                        Radiation baffles are used to restrict and direct radiation emissions.<br />
                        <br />
                        These can be found at Sopwith Arsenal in the Taevaisa system.',
         623        => 'Produced by: Industrial/Refinery near Run<br />
                        Consumed by: High Tech<br />
                        <br />
                        These customised manifolds are used to combine plasmas and gases from multiple sources into a single element.<br />
                        <br />
                        These can be found at Somerville Station in the Kharpulo system.',
         624        => 'Produced by: Extraction/Refinery near Eurybia<br />
                        Consumed by: Industrial (Surface)<br />
                        <br />
                        These custom made reinforced mounting plates are used to strengthen the supports for a mounted device.<br />
                        <br />
                        These can be found at Grassmann Station in the Findalibila system.',
         625        => 'Produced by: Industrial/Refinery near Myrbat<br />
                        Consumed by: High Tech<br />
                        <br />
                        These specially made heatsink interlinks provide the mechanism for the emissive cooling plates within a heatsink.<br />
                        <br />
                        These can be found at Gresley Enterprise in the LHS 3980 system.',
         626        => 'Produced by: Industrial/Refinery near Leesti<br />
                        Consumed by: High Tech<br />
                        <br />
                        These custom made magnetic emitter coils are used to focus and guide wireless forms of energy transfer.<br />
                        <br />
                        These can be found at Steiner Platform in the Aasgaa system.',
         627        => 'Used by factions as a reward for mission contracts.<br />
                        Consumed by: High Tech<br />
                        <br />
                        Modular terminals are ubiquitous items that provide a hardware display of data in a visual and audio format.',

        // Medicines (7)
         701        => 'Produced by: High Tech<br />
                        Consumed by: Agricultural<br />
                        <br />
                        A range of engineered substances created to prevent or treat common diseases and ailments among livestock and fisheries. These are produced on High Tech worlds and consumed on Agricultural worlds.',
         702        => 'Produced by: High Tech and Industrial<br />
                        Consumed by: Everywhere except High Tech and Industrial<br />
                        <br />
                        A wide range of pharmaceuticals used in the healthcare sphere. Includes treatments for preventative, convalescent and palliative care.',
         703        => 'Produced by: High Tech<br />
                        Consumed by: Everywhere except High Tech<br />
                        Illegal in most markets.<br />
                        <br />
                        Biological agents used to sustain and heal injured humans in combat. Combat stabilisers allow recipients to continue to function despite unimaginable amounts of pain. Some cultures consider they encourage the glorification of combat, and so are illegal.',
         704        => 'Produced by: High Tech<br />
                        Consumed by: Colony, Agricultural, Industrial, Refinery, Extraction and Military<br />
                        <br />
                        A broad category of engineered substances that enhance human physical, mental or emotional capabilities. Produced on High Tech worlds and widely consumed. There are some risks from excessive consumption, and they are illegal in some jurisdictions.',
         705        => 'Produced by: High Tech<br />
                        Consumed by: Everywhere except High Tech and Terraforming<br />
                        <br />
                        Targeted engineered cells to restore damage in older human cells. These can greatly extend the life of humans that take them. Some cultures believe it is immoral, especially as they tend to be used by the richest people, and so they are illegal in some jurisdictions.',
         706        => 'A potent physical stimulant produced using extracts of a native Terra Mater carnivorous plant. When added to the user\'s circulatory system, it allows a human to exert themselves far beyond their normal capabilities. The side effects are often permanent with increased likelihood of haemorrhaging and weight loss.',
         707        => 'Leeches were used medically for millennia on ancient Earth but were largely superseded by technology. Hundreds of years later, a chance discovery on Kachirigin revealed some very valuable properties of the native creatures. Kachirigin leeches can painlessly filter impurities from the user\'s blood, so can be used as a cure-all for hangovers and the worst effects of certain addictions. They are prized by the wealthy and hedonistic, and have an almost cult-like following.',
         708        => 'A neurological stimulant only available in Aganippe. Often used to temporarily increase the user\'s memory retention and awareness, it is a favourite amongst students and scholars. Recent reports have revealed that excessive use and abuse of the compound has been linked with psychotic episodes and hallucinations.',
         709        => 'The medical qualities of the mineral waters of Shintara are decried by many in the scientific community as nonsense. This has not stopped widespread rumours that water from the planet can cure almost any ailment, and even reverse the ageing process. The company that controls the source of this water is happy to allow the rumours to continue, and people all over the galaxy are willing to pay a small fortune for the real thing.',
         710        => 'Originally created to be used in a religious ceremony, wherein an apostate is purified through forced confession, then repentance for their sins. The sect was soon infiltrated by corporate agents, and the psychoactive compound identified. The only secrets that have not been revealed by this drug are the ingredients for creating it, and the fate of the religious sect that discovered it.',
         711        => 'Available in a variety of textures, this scrub can exfoliate just about anything!',
         712        => 'Initially thought to be a plant, settlers of the system would swallow it whole for its slimming and appetite suppressing qualities. The revelation that the plant is actually a parasitical life form has not reduced its popularity. Those infested have reported a difficulty in removing the parasite once it has established, but the benefits include an immunity to certain biological poisons. The parasite must be purged before it begins to pupate.',
         713        => 'These hand crafted wind chimes are specially tuned to stimulate a variety of spiritual and physical responses. They are known for helping people find inner peace, or direction, and are guaranteed to keep your chakras aligned.',
         714        => 'These sacred items are said to bring wealth and prosperity to all who inhale their smoke, as can be seen by how prosperous the George Pantazis system has become.',
         715        => 'A range of infusions from indigenous plants and herbs that produce highly effective medicines rivalling or exceeding the best synthetics. Ill-informed combinations have been known to be instantly fatal',
         716        => 'Guaranteed to give a cleaner you. The deep cleansing action works both inside and out, with this fully digestible soap! Rumoured to be made from human fat.',
         717        => 'Produced by: High Tech<br />
                        Consumed by: All but High Tech<br />
                        <br />
                        These medicines are specially tailored to counteract the most virulent of diseases, whilst causing the minimum of damage to the host.',
        718         => 'These sophisticated pharmaceuticals use nanoscale materials to target disease far more efficiently than conventional medicine. The product of an ambitious research-and-development programme, they are developed exclusively in the Antal system by the technologically advanced community Utopia.',

        // Metals (8)
         801        => 'Produced by: Refinery<br />
                        Consumed by: Industrial and Military<br />
                        <br />
                        Aluminium, Al, atomic number 13. Melting point 933K. A silvery-white ductile metal that is regularly used by many industries in alloys for its lightness and strength.',
         802        => 'Produced by: Refinery<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        Beryllium, Be, atomic number 4. Melting point 1560K. A white-grey alkaline earth metal. Widely used in the spacecraft industry right from its early pre-interstellar history because of its high thermal stability and low density. It is also a very useful component of many alloys, both industrially and for specialist high tech components.',
         803        => 'Produced by: Extraction and Refinery<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        Cobalt, Co, atomic number 27. Melting point 1768K. Traditionally used as a blue colouring, but now mainly used for creating high temperature alloys. Also has biotech applications.',
         804        => 'Produced by: Refinery<br />
                        Consumed by: Industrial<br />
                        <br />
                        Copper, Cu, atomic number 29. Melting point 1358K. A highly ductile lustrous red-orange metal, with good thermal and electrical conductivity. Used broadly by industry as a cheap conductor and in many alloys. It is also used in biotech and aquaculture especially in many extraterrestrial and hemocyanal species.',
         805        => 'Produced by: Refinery<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        Gallium, Ga, atomic number 31. Melting point 303K. It is a soft silvery metal at human room temperature, but melts in the human hand. It is used as a key component in semiconductors and lasers.',
         806        => 'Produced by: Extraction and Refinery<br />
                        Consumed by: All except Agri, Refinery, Extraction and Military<br />
                        <br />
                        Gold, Au, atomic number 79. Melting point 1337K. A valuable precious metal, and because it is the most resistant metal to corrosion, is widely used in jewellery and luxury goods and for contact pads in electronics.',
         807        => 'Produced by: Refinery<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        Indium, In, atomic number 49. Melting point 429K. Used industrially and in high tech for a wide range of alloys, including superconductors, sensors and holo projectors.',
         808        => 'Produced by: Refinery<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        Lithium, Li, atomic number 3. Melting point 453K. A silvery white alkali metal used by industry in ceramic production, and in electronic devices for energy storage. Before the advent of direct brain treatments, it was used to treat human mental disorders in early history.',
         809        => 'Produced by: Extraction<br />
                        Consumed by: All except Agri, Refinery, Extraction and Military<br />
                        <br />
                        Palladium, Pd, atomic number 46. Melting point 1825K. Often used in electronics and for purifying noxious gases.',
         810        => 'Produced by: Mining only<br />
                        Consumed by: All except Agri, Refinery, Extraction and Military<br />
                        <br />
                        Platinum, Pt, atomic number 78. Melting point 2041K. A grey-white precious metal used as a catalyst within many industrial processes, in addition to its value in electronics and luxury goods because of its resistance to corrosion.',
         811        => 'Produced by: Extraction and Refinery<br />
                        Consumed by: All except Agri, Refinery, Extraction and Military<br />
                        <br />
                        Silver, Ag, atomic number 47. Melting point 1234K. A precious metal valued in jewellery. It also has many useful industrial properties being the best electrical and thermal conductor of any metal, and also the most reflective, and so is widely used in high tech applications, either in its pure form or alloyed with other metals.',
         812        => 'Produced by: Refinery<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        Tantalum, Ta, atomic number 73. Melting point 3290K. Used to make capacitors and high melting point alloys in reactors, and by the military for specialist alloys used in weapons for armour penetration.',
         813        => 'Produced by: Refinery<br />
                        Consumed by: Industrial and Military<br />
                        <br />
                        Titanium, Ti, atomic number 22. Melting point 1941K. A lustrous, silver-grey, low density, high strength metal that is used in a great many industrial applications, including high-spec spacecraft hulls.',
         814        => 'Produced by: Refinery<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        Uranium, U, atomic number 92. Melting point 1405K. Uranium is a silvery-grey metal, usually found as a mix of isotopes, mostly U238, and typically less than 1% of the radioactive U235. As a whole it is only weakly radioactive. It is chemically toxic but a useful element in industry, mainly because of its density. In early human history it was used as a power source in fission reactors. Standard canisters offer sufficient protection from the low level of radiation.',
         815        => 'Produced by: Mining only<br />
                        Consumed by: High Tech, Industrial, Military and Terraforming<br />
                        <br />
                        Osmium, Os, atomic number 76. Melting point 3306K. A very hard bluish-white metal. Provides extreme durability even at high temperatures, and is a valuable constituent in specialist alloys.',
         816        => 'Produced by: Refinery (Surface) <br />
                        Consumed by: High Tech and Military<br />
                        <br />
                        Thorium, Th, atomic number 90. Melting point 2023K. A radioactive actinide metal. It was once used in ancient fission reactors. It is still used by some medical technology and as a component in advanced ceramics.',
         817        => 'Produced by: Refinery (Surface) <br />
                        Consumed by: High Tech<br />
                        <br />
                        Thallium, Tl, atomic number 81. Melting point 577K. It is a post-transition metal. It has a number of technological uses including medical imaging, infra-red optics and high temperature super conductivity.',
         818        => 'Produced by: Refinery (Surface) <br />
                        Consumed by: High Tech<br />
                        <br />
                        Lanthanum, La, atomic number 57. Melting point 1193K. It is a soft metallic element used as an additive in glass. Its properties make it ideal for optical communications systems, other lighting applications and as a catalyst for various refining processes.',
         819        => 'Produced by: Refinery (Surface) <br />
                        Consumed by: High Tech<br />
                        <br />
                        Bismuth, Bi, atomic number 83. Melting point 545K. It is a pentavalent post-transition often used for medicines and specialist alloys. It is sometimes used in pharmaceuticals.',
         820        => 'Hafnium 178m2, Hf, atomic number 72. This nuclear isomer has the potential to unleash enormous quantities of gamma radiation, making it an excellent ingredient for use in devastating weapons of mass destruction. As a result Hafnium 178 is a highly controlled substance that is universally illegal to own without special dispensation.',
         821        => 'When gold is exposed to the rare gas coming from thermal vents on the sea beds of the twin Earth-like planets Sothis A5 and Sothis A6, it forms into a previously unseen crystalline structure unlike other crystalline gold. Scientists and engineers are only just beginning to discover the technological applications for this rare form of gold.',
         822        => 'Produced by: Mining only<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        Praseodymium, Pr, atomic number 59. Melting point 1208K. This is a soft and malleable metal. It is a rare mineral used for a variety of purposes including: a component in enhanced magnets, an alloy component for metals and laser optics.',
         823        => 'Produced by: Mining only<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        Samarium, Sm, atomic number 62. Melting point 1345K. This element has remarkable magnetisation properties, far exceeding that of iron. It is also commonly used as a catalyst and chemical reagent.',
         824        => 'An ultra-strong metal alloy used in the manufacture of robotics, heavy machinery and weaponry.<br />
                        Due to the dangerous nature of mining and processing the alloy and fusing it with Platinum, most systems refused to produce it and the technique was almost lost.<br />
                        Now the factions of the Nahuatl system are the only people with the knowledge to create the metal.',

        // Minerals (9)
         901        => 'Produced by: Extraction<br />
                        Consumed by: Refinery<br />
                        <br />
                        Bauxite is the main source of aluminium, and is in fact a mix of ores that occur naturally together sometimes with small amounts of rutile and haematite. A key source of aluminium for refineries.',
         902        => 'Produced by: Extraction<br />
                        Consumed by: Refinery<br />
                        <br />
                        Bertrandite: chemical formula Be4Si2O7(OH)2. Beryllium ore. A pale yellow orthorhombic mineral, widely refined into Beryllium.',
         903        => 'Produced by: Extraction<br />
                        Consumed by: Refinery<br />
                        <br />
                        Coltan is a mixture of columbite and tantalite, both valuable tantalum ores. Useful in capacitors throughout history for many high tech and electronic devices.',
         904        => 'Produced by: Extraction<br />
                        Consumed by: High Tech and Refinery<br />
                        <br />
                        Gallite: chemical formula CuGaS2. Gallium ore. Named for its high gallium content and is widely extracted at refineries.',
         905        => 'Produced by: Extraction<br />
                        Consumed by: Refinery<br />
                        <br />
                        Indite: chemical formula FeIn2S4. Indium ore. A rare, black crystalline mineral. Often found in what were once hydrothermal deposits or asteroids that have been heated in their past. It is widely refined into Indium.',
         906        => 'Produced by: Extraction<br />
                        Consumed by: Refinery<br />
                        <br />
                        Lepidolite: chemical formula K(Li,Al,Rb)3(Al,Si)4O10(F,OH)2. A purplish pink phyllosilicate mineral. Source of Lithium once refined.',
         907        => 'Produced by: Extraction<br />
                        Consumed by: High Tech and Refinery<br />
                        <br />
                        Rutile: Titanium Oxide, TiO2. Titanium ore. A wine-red crystalline mineral used in creating ceramics in high refraction optics, and of course refined to produce Titanium.',
         908        => 'Produced by: Extraction<br />
                        Consumed by: Refinery<br />
                        <br />
                        Uraninite: chemical formula UO2. A radioactive ore, radioactive principally because of the small amount of the isotope U235 present. Refined into uranium at some refineries. Uranium was used for power in early human history, using refined U235 in fission reactors, but now is used mainly for biotech applications. Illegal in some jurisdictions.',
         909        => 'Produced by: Mining only<br />
                        Consumed by: Everywhere except Terraforming, Extraction and Military<br />
                        <br />
                        Painite: chemical formula CaZrAl9O15(BO3). Painite is an incredibly rare borate mineral that typically takes the form of a red gemstone. Highly sought after by socialites throughout occupied space, it is renowned for being one of the most valuable types of gemstone in the galaxy.',
         910        => 'Produced by: Extraction (Surface) <br />
                        Consumed by: High Tech and Refinery<br />
                        <br />
                        This phyllosilicate mineral is used in high pressure experiments. On some worlds it\'s also a material for intricate art and crafts.',
         911        => 'Produced by: Planetary Mining<br />
                        Consumed by: Service (Orbital) and Tourist <br />
                        <br />
                        This crystalline silicon carbide mineral has applications in electronics manufacture, and thermal energy absorption. It is also used in jewellery and other crafted items.',
         912        => 'Produced by: Extraction (Surface) <br />
                        Consumed by: Refinery <br />
                        <br />
                        This zinc sulphate mineral is used in medicines and antiseptic treatments.',
         913        => 'Produced by: Extraction (Surface) <br />
                        Consumed by: High Tech and Refinery<br />
                        <br />
                        Used in a range of applications, including: Insecticides, pesticides, fireworks and as a solvent for aluminium oxide.',
         914        => 'The unique magnetic flows found in the deepest caves of Cherbones have formed amazing crystals that are coveted for their beauty. These fragile structures are manually extracted at great personal risk. The local inhabitants train all their lives to learn the method for extracting the crystals. Many are lost on their first attempt.',
         915        => 'A particularly rich seam of high grade opals famed for their mesmerising fire-like reflections. Imperial citizens view them as a status symbol, representing the fire at the birth of the Empire. Their high market value has led to the planet being systematically strip-mined by Imperial slaves.',
         916        => 'Produced by: Planetary Mining<br />
                        Consumed by: Service (Orbital) and Tourist<br />
                        <br />
                        Taaffeite, BeMgAl4O8, is a rare gemstone with a purple hue, used in jewellery and other crafts.',
         917        => 'Produced by: Planetary Mining<br />
                        Consumed by: Service (Orbital) and Tourist<br />
                        <br />
                        Jadeite, NaAlSi2O6, is a substance of the purest green and used in variety of crafts and art. It has historical roots with the ancient Mesoamerican cultures.',
         918        => 'Produced by: Mining only<br />
                        Consumed by: High Tech<br />
                        <br />
                        Bromellite, BeO, is a white oxide mineral with a wide range of uses, such as ceramic based electronics, and enhancing material properties of mechanical strength and thermal conductivity.',
         919        => 'Produced by: Mining only<br />
                        Consumed by: All<br />
                        <br />
                        Low Temperature Diamonds, C, are formed under intense pressure (as with regular diamonds), but without a heat component.',
         920        => 'Produced by: Mining only<br />
                        Consumed by: Colony, High Tech and Industrial<br />
                        <br />
                        Methanol Monohydrate, CH6O2, are crystals with unusual thermoelastic properties which are useful for mechanical and optical materials.',
         921        => 'Produced by: Mining only<br />
                        Consumed by: High Tech and Refinery<br />
                        <br />
                        Lithium Hydroxide, LiOH, is a hygroscopic material often used for scrubbing CO2 from life support systems. It is also used within certain ceramics and as a heat transfer medium.',
         922        => 'Produced by: Mining only<br />
                        Consumed by: Refinery<br />
                        <br />
                        Methane Clathrate, CH4·5.75H2O or 4CH4·23H2O, is a chemical where methane is bound within a crystal lattice of water.',
         923        => 'Rhodplumsite is a rhodium-lead sulphide mineral distinguished by the fact that it exhibits different colours when viewed from different angles, appearing white, creamy pink or grayish blue.',
         924        => 'Serendibite is a pale yellow, blue-green or greyish blue silicate mineral that takes its name from Serendib, the old Arabic name for Sri Lanka.',
         925        => 'Monazite is a reddish-brown phosphate mineral containing thorium and sometimes uranium, making it radioactive.',
         926        => 'Musgravite is an oxide mineral first discovered on Earth in the Musgrave mountain range in Australia, hence its name.',
         927        => 'Benitoite is a blue barium titanium silicate mineral that appears fluorescent under shortwave ultraviolet light.',
         928        => 'Grandidierite is bluish-green nesosilicate mineral distinguished by the fact that it exhibits different colours when viewed from different angles.',
         929        => 'Alexandrite is a form of chrysoberyl characterised by the fact that it exhibits different colours when viewed from different angles and under different light conditions.',
         930        => 'Void opals are a mineraloid prized by various cultures. Their lack of reflectivity means that they seem almost to absorb light, hence their name.',

        // Slavery (10)
        1001        => 'Produced by: Agricultural<br />
                        Consumed by: All<br />
                        Only legal on Imperial worlds or dictatorships and patronage style governed markets.<br />
                        <br />
                        Slavery is an important part of Imperial Society, providing labour for the Empire and a safety net for its citizens. Many Imperials will choose to sell themselves into a fixed period of slavery rather than face the embarrassment and dishonour of living with a debt.',
        1002        => 'Unregulated slavery is illegal in most parts of the galaxy.<br />
                        <br />
                        Bonded men and women. Almost universally illegal and shunned by most civilised nations. Great efforts have been made to stamp out this trade in misery, however a few markets remain open.',
        1003        => 'Master Chefs are selected based on genetic markers that tend to favour an aptitude for the culinary arts. Little is known about them except that they are kidnapped as children and then trained under rigorous conditions to bring out their genetic cooking potential. The use of Master Chefs is illegal in most Federal and Alliance systems, but is regarded as a sign of high status in many Imperial systems. Many anti-slavery protest groups have tried to free Master Chefs from their life of culinary bondage, yet due to their training, most return of their own free will to serve. Theirs is a life of servitude - they know nothing but to cook.',

        // Technology (11)
        1101        => 'Produced by: High Tech<br />
                        Consumed by: Refinery<br />
                        <br />
                        Engineered catalysing agents, used by refineries to improve the efficiency of a large number of chemical reactions.',
        1102        => 'Produced by: High Tech<br />
                        Consumed by: Agricultural<br />
                        <br />
                        A bio-electronic suite of sensor systems and analysis software, easily adapted to monitor a wide variety of organic species.',
        1103        => 'Produced by: High Tech<br />
                        Consumed by: Terraforming and Agricultural<br />
                        <br />
                        An automated system to monitor and sustain nutritional and chemical balance levels of a confined marine ecosystem using targeted chemical and microbial filtration, and the spares and consumables required.',
        1104        => 'Produced by: High Tech<br />
                        Consumed by: Industrial<br />
                        <br />
                        High speed, low cost fabricators that can build almost any design out of basic resources.',
        1105        => 'Produced by: High Tech<br />
                        Consumed by: Extraction<br />
                        <br />
                        Genetically engineered lichen used to prepare an asteroid field or broken surface rocks for industrial extraction. Once deployed, the lichen will spread over the field and concentrate specific minerals, changing colour in the process, allowing for efficient extraction.',
        1106        => 'Produced by: Industrial<br />
                        Consumed by: High Tech and Military<br />
                        <br />
                        Industrially mass-produced computer components and electronic devices, regulators, storage, distribution boards, spares. Wherever there are computers, there are computers that have gone wrong and need a spare part.',
        1107        => 'Produced by: High Tech<br />
                        Consumed by: Industrial, Refinery, Extraction and Military<br />
                        <br />
                        Suitable for human use in hostile environments including vacuum, together with spare parts. Fitted with atmospheric scrubbing and life support, vital signs monitoring, automatic medical systems and a multichannel communications interface.',
        1108        => 'Produced by: High Tech<br />
                        Consumed by: Terraforming and Agricultural<br />
                        <br />
                        A soup of carefully designed archaebacteria, lichens, and micro-fauna and their dispersal equipment. Used in terraforming or enriching agricultural land.',
        1109        => 'Produced by: High Tech<br />
                        Consumed by: Refinery<br />
                        <br />
                        Self-calibrating tuned oscillators that resonate at a range of specific frequencies, used at refineries for bulk processing of ores.',
        1110        => 'Produced by: High Tech<br />
                        Consumed by: Industrial<br />
                        <br />
                        Robotics are used to perform simple automated tasks or to act as avatars for remotely located humans in hazardous environments. They are also used for repetitive and highly accurate production line tasks.',
        1111        => 'Produced by: High Tech (Surface) <br />
                        Consumed by: All (Surface) except High Tech <br />
                        <br />
                        These monitor structural stability of buildings under a broad range of gravities. They will generate alerts if dangerous stresses or damage is detected.',
        1112        => 'Produced by: Industrial (Surface) and High Tech (Surface) <br />
                        Consumed by: Extraction (Surface) and Military (Surface) <br />
                        <br />
                        Muon topographical instruments providing deep surface scans of planets and moons.',
        1113        => 'We make the most realistic and exclusive animal companions using the latest technology and robotics, better than nature and guaranteed to last. Rigorous testing ensures that all our animals conform to the appropriate legislation on artificial intelligence.',
        1114        => 'Formula 42 achieves incredible results, transforming even the most arid of desert worlds into fertile utopias. Beyond its name, all aspects of this product are kept under the highest secrecy. However, people don\'t ask questions when it delivers time and again.',
        1115        => 'Used by factions as a reward for mission contracts.<br />
                        Consumed by: High Tech and Military<br />
                        <br />
                        Nanobreakers are tiny machines used for disassembling certain, specialised materials.',
        1116        => 'Used by factions as a reward for mission contracts.<br />
                        Consumed by: High Tech and Military<br />
                        <br />
                        Telemetry suites provide access to information flows relating to specific components within a system.',
        1117        => 'Produced by: High Tech<br />
                        Consumed by: Industrial and Military<br />
                        <br />
                        Micro controllers are small units to provide actuation and process control for lightweight devices.',
        1118        => 'Produced by: Industrial/Extraction near 70 Tauri<br />
                        Consumed by: High Tech (Surface) and Military (Surface)<br />
                        <br />
                        Ion distributors are used to control the flow of ions within a device. These can be found at Stevens Orbital in the HIP 18327 system.',
        1119        => 'Produced by: Industrial/Refinery near Lei Jing<br />
                        Consumed by: High Tech and Military<br />
                        <br />
                        Diagnostic sensors that provide hardware monitoring and telemetry for a variety of systems.<br />
                        <br />
                        These can be found at Kanwar Gateway in the Xiripa system.',
        1120        => 'Produced by: High Tech<br />
                        Consumed by: Service<br />
                        <br />
                        Equipment which allows for rapid diagnosis of a large number of ailments and diseases. This equipment also screens for and identifies prohibited substances.',

        // Textiles (12)
        1201        => 'Produced by: Agricultural<br />
                        Consumed by: Industrial<br />
                        <br />
                        Assorted tanned animal hides. Used in industry to produce clothing and high-value furnishings.',
        1202        => 'Produced by: Agricultural<br />
                        Consumed by: Industrial<br />
                        <br />
                        A range of high-value fabrics derived from natural organic materials generally produced on outdoor worlds. These are used in industrial locations to make clothing and other items.',
        1203        => 'Produced by: Refinery<br />
                        Consumed by: Industrial<br />
                        <br />
                        Textile material created from artificial fibres. Used by industry for clothing and lightweight construction materials.',
        1204        => 'Due to the particular chemical conditions of the water on Belalans, the rays have a particularly soft skin.',
        1205        => 'The hard colourful exoskeletons of large insect-like creatures. Used as decoration and in the production of exotic materials and clothing.',
        1206        => 'Rapa Bao Snake Skins are famed throughout the galaxy for their size and strength. The snakes are free-range and many workers have lost their lives while tending to this vital crop.',
        1207        => 'Genetically regressive rhinoceroses were originally introduced to Vanayequi to provide a reliable source of leather for nearby industries. The genetic modification was successful in reducing the animal\'s aggressive tendencies, but had unintended side effects. As the ceratomorphs returned to a more primitive state, they began growing soft, lush fur. This fur is now prized around the galaxy for its resilience and warmth.',
        1208        => 'The native amphibian like creatures of Banki have particularly colourful and lustrous skins, with a number of useful properties when wet. Highly valued on oceanic worlds.',
        1209        => 'Spun from atoms using a number of interconnected particle colliders, this silk is almost indistinguishable from the real thing.',
        1210        => 'Woven from living plants, the fabric created retains the native Flora\'s sympathetic camouflage. When worn, the user will blend in with whatever their current environment is. Although considered for military applications, the low availability of the fabric, and the slow speed of the camouflage effect, led to it being deemed inferior to technological camouflages.',
        1211        => 'Produced by: Refinery<br />
                        Consumed by: High Tech and Industrial<br />
                        <br />
                        These fabrics allow for current to be passed through them in order to build cloth-set circuitry for wearable technology.',
        1212        => 'Produced by: Industrial<br />
                        Consumed by: Military<br />
                        <br />
                        Made from high-grade fabrics which are highly durable as well as adaptive to different temperatures and weather conditions, this clothing is essential for military personnel.',

        // Waste (13)
        1301        => 'Produced by: All except Agricultural<br />
                        Consumed by: Agricultural<br />
                        <br />
                        Sterilised, then used as a basic form of fertiliser on many Agricultural worlds.',
        1302        => 'Produced by: Nowhere<br />
                        Consumed by: Refinery<br />
                        <br />
                        Chemicals that have become contaminated beyond use. Usually a by-product of industrial processes.',
        1303        => 'Produced by: Colony, High Tech, Military and Industrial<br />
                        Consumed by: Refinery<br />
                        <br />
                        Assorted unwanted refuse with a high metal content.',
        1304        => 'Toxic waste is illegal in most parts of the galaxy.<br />
                        <br />
                        Hazardous toxic waste that is unsafe for human contact. Highly volatile, likely to leak and may explode when damaged.',

        // Weapons (14)
        1401        => 'Produced by: High Tech and Military<br />
                        Consumed by: All<br />
                        <br />
                        Hand-held weapons used by law enforcement and for personal protection. They temporarily stun or incapacitate a human target, and are legal in most jurisdictions.',
        1402        => 'Produced by: High Tech, Industrial and Military<br />
                        Consumed by: All<br />
                        Legal in feudal, dictatorship, co-operative, communist and independent corporate governed worlds.<br />
                        <br />
                        Personal firearms, designed for both self defence and offence, but intended to kill a human attacker. Illegal or highly controlled in many jurisdictions.',
        1403        => 'Produced by: High Tech and Military<br />
                        Consumed by: All<br />
                        <br />
                        Capable of actively dissipating large amounts of kinetic, electrical and thermal energy, reactive armour greatly increases the chance of survival of the wearer from sustained weapons fire.',
        1404        => '"Produced by: High Tech, Industrial and Military<br />
                        Consumed by: Agricultural, Refinery and Military<br />
                        Illegal in all markets except those governed by communist or dictatorships.<br />
                        <br />
                        Military-grade human-portable heavy weapons. The trade and movement of military-grade weaponry is highly regulated',
        1405        => 'Kamorin Historic Weapons are happy to provide the re-enactor and enthusiast with fully-functional replicas of weapons from a number of important historical eras. Our expert team of craftsmen use traditional materials and methods, with a modern eye for quality. Exploring and researching the annals of history, our artisans continue to bring you the best of weapons from throughout the ages.',
        1406        => 'Produced by: Military (Surface) <br />
                        Consumed by: Colony (Surface), Extraction (Surface), High Tech (Surface) and Refinery (Surface) <br />
                        <br />
                        A cheap and effective way of creating area denial. These explosive devices are banned in most jurisdictions and are effective against personnel and land vehicles.',
        1407        => 'These tiny crawling creatures have been called \'a lab in a bag\'. They exude tailored biological agents that adapt and mutate to overcome the defences of their enemies. When deployed in large numbers they resemble a viscous yellow goo that slowly crawls over the victim, devouring them completely. When there are no further nutrients to absorb, the insects will become dormant, and can be recovered by specially trained teams to be used again.',
        1408        => 'Swarm is the codename of the weaponised form of the tiny but lethally poisonous biting insects native to HIP 118311. Manipulated by a control field, the weapons can be targeted onto enemy positions using a remote electromagnetic beam, then unleashed to wreak chaos and death on enemy ranks. The weapon\'s trademark buzzing quickly made it a favourite with crime syndicates, favoured for intimidation and enforcement purposes. Banned in most jurisdictions.',
        1409        => 'The finest blades money can buy. Putting art into death, forged from the purest alloys and available in a range of traditional and modern styles. Ceremonial and combat blades are available.',
        1410        => 'Leave your own personal mark with these highly customisable weapons, a speciality of the Gilya system. Leave no doubt about who put your victim to rest when using a Gilya Signature weapon. Illegal but highly prized in many jurisdictions. Being disarmed of your signature weapon is considered the greatest of humiliations.',

        // Unknown (15)
        1501        => null,

        // Salvage (16)
        1601        => 'A collection of highly illegal AI remnants. These items are of extreme interest to various shady organisations and remote cults. Their almost mythical status has led to a huge amount of counterfeiting, further inflating the value of items with a clear and proven history. It is uncertain whether any of these pieces actually retain the AI personality that was originally present within.',
        1602        => 'A collection of priceless artefacts. Such objects are often invested with great cultural and historical value. Removal of antiquities from their original sites is generally considered a crime. The legal extraction of antiquities can only occur when the relevant permit has been granted by the local authorities.',
        1603        => 'This container holds a crystalline shard of unknown origin. Scans indicate that the foot long shard is suspended inside a modified, self-sustaining, fusion-core containment field. Any breach of the field will result in the container\'s destruction.',
        1604        => 'This container appears to hold an assorted collection of low-value trinkets, knick-knacks and statuettes. Such trinkets are generally used by superstitious pilots to try and win favour with Lady Fortuna. However, these particular knick-knacks have a much more valuable prize hidden within.',
        1605        => 'The trade manifest data for a ship that met its end nearby. The information contained within can be extremely useful to unscrupulous individuals and fetches a good price on the black market. However, illegal salvage is punishable by law.',
        1606        => 'Escape pods are typically made from composite materials designed to withstand extremes of pressure and temperature, and can protect a single occupant in the event of ship destruction.',
        1607        => 'The flight computer from a destroyed ship. Recovered flight computers can contain details on the movements and actions of ships before meeting their demise. If taken as legitimate salvage then reimbursement will be offered from markets. Taking a black box from the scene of an accident without the proper licence is an offence, but can offer lucrative profits on the black market.',
        1608        => 'Highly confidential documents detailing military movements and military strategy. Possession of such documents is highly illegal, due to their sensitive nature. For the same reason they fetch a large sum for the right seller on the black market.',
        1609        => 'Highly prized by collectors, the movement of recovered artefacts is strictly controlled by a number of authorities around the galaxy. Fortunately a lucrative black market offers savvy explorers with means to find reliable buyers for any ancient treasures.',
        1610        => 'Prized and treasured works of art. The galaxy is rife with reproductions and forgeries, and trade in the genuine article is highly controlled, with pieces transported between owners in secure convoys. Occasionally pieces find their way onto the black market, selling for under-the-counter prices. Due to a recent relaxing of the law, selling on the open market has become a viable prospect.',
        1611        => 'Often dangerous and corrosive in nature, experimental chemicals are often created for research and scientific purposes. In the wrong hands they can be turned into dangerous weapons, so trade is strictly controlled. A thriving black market trade has proved difficult to control for authorities.',
        1612        => 'Transcripts of communications between dissident groups. These documents are highly valued by a number of factions for the intelligence they contain. It is considered highly suspicious to be carrying them, but black market trade in data will always flow.',
        1613        => 'The latest developments in experimental technology are jealously guarded by the galaxy\'s various corporations, and unsanctioned possession of prototype tech is severely punished. However, pilots have discovered there is a prosperous black market for stolen tech.',
        1614        => 'Blueprints of patented new machinery and systems that are highly prized on the black market. Copyright theft is frowned upon by the authorities and those carrying illegally acquired blueprints can face extreme application of the law.',
        1615        => 'Originally known as "Unknown Artefacts", these strange objects are of Thargoid origin. They have the ability to repair themselves by extracting non-organic material from their immediate environment, and this self-repair mechanism can severely damage starships and other machinery. They can also scan nearby vessels and celestial bodies, and transmit information about the scanned object in an encrypted form. Since they have not been given a designation by intergalactic trade authorities, it is impossible to buy or sell them legally.',
        1616        => 'Highly confidential documents detailing military movements and military strategy. Possession of such documents is highly illegal, due to their sensitive nature. For the same reason they fetch an exceedingly large sum from the right buyer.',
        1617        => 'Accidents in space often leave a lot of debris, some of that wreckage is useful for determining the cause of the accident. They should be handed in to whichever organisation has called for their collection, however they also generate some demand as morbid mementos or simply for scrap.',
        1618        => 'It is sometimes safer to transport sensitive data physically and also quicker if immense quantities need transferring. They usually have little intrinsic value except to the organisation attempting to secure these items.',
        1619        => 'Personal items are often transported and sometimes lost while travelling within and between star systems. They usually have little value except to their owners.',
        1620        => 'An assortment of materials, often marketing related, and are of little value on the open market.',
        1621        => 'Encrypted documents detailing logistics, armament control points and infrastructure. Possession of such documents is illegal, due to their sensitive nature. There is a limited black market demand for these items as their military grade encryption makes them almost impossible to crack.',
        1622        => 'Encrypted resources and documentation for secret attack plans. Possession of such documents is illegal as its possession implicates those transporting the information. There is a limited black market demand for these items.',
        1623        => 'Heavily encrypted data that is of little interest, although some hackers use it for training or practise, or simply enjoy the challenge of breaking the encryption. There is a limited black market for these items.',
        1624        => 'Used to carry political correspondence and other confidential items. Can only be sold on the black market. These packages are often contained within booby-trapped containers.',
        1625        => 'A collection of data and equipment, the results of a series of scientific experiments and observations.',
        1626        => 'Most scientific sample analysis is done on site, although certain types of projects require further or separate analysis. These finds can sometimes lead to breakthroughs and are also highly sought after by private collectors.',
        1627        => 'Political prisoners are sometimes transported in cargo pods to help disguise their movement.',
        1628        => 'Sometimes criminal gangs hide their hostages in cargo pods fitted with rudimentary life support.',
        1629        => 'Geological samples used for scientific and commercial purposes.',
        1630        => 'These ubiquitous devices provide extensive data storage, but are extremely volatile when damaged. They must be returned by the end date for information retrieval or their contents become unusable.',
        1631        => 'Escape pods are typically made from composite materials designed to withstand extremes of pressure and temperature, and can protect a single occupant in the event of ship destruction.',
        1632        => 'A large core filled with digital data.',
        1633        => 'A where\'s where and what\'s what of the Milky Way. This guide highlights the galaxy\'s top destinations and hotspots.',
        1634        => 'This appears to be an idol crafted to worship some sort of deity or higher form of life.',
        1635        => 'Contains theoretical and experimental research, along with samples, the subject and contents of which are strictly prohibited by most authorities; their very existence is a crime, however their contents are highly valuable.',
        1636        => 'This containment unit safely stores antimatter protecting it from gamma radiation and interaction with standard matter.',
        1637        => 'Items from mankind\'s first attempts at space exploration and research.',
        1638        => 'Fossilised fragments from an unidentified life form. Inquisitive minds will revel at the chance to analyse and possess one of our galaxy\'s ancestral occupants.',
        1639        => 'Originally known as "Unknown Probes", these strange objects are of Thargoid origin. They are capable of emitting an electro-magnetic pulse that can temporarily incapacitate a starship. Since they have not been given a designation by intergalactic trade authorities, it is impossible to buy or sell them legally.',
        1640        => 'These materials have inherent value. They are very useful in maintaining stability in otherwise volatile economies. Alongside the wealth factor, precious gems and metals play a significant role in the generation of extravagant status symbols.',
        1641        => 'An item located at the large wreckage sites. Its appearance and composition indicate a common origin with the Thargoid artefacts and probes found in the Merope region.',
        1642        => 'A bio-mechanical canister containing biological matter of Thargoid origin. It is unclear what the purpose of the matter contained within is, but it appears that the Thargoids have the ability to break down and reuse biological matter. It has been speculated that they also use this material in the construction on their structures, technology and ships.',
        1643        => 'A bio-mechanical canister containing Thargoid resin. This substance, known as Resin, seems to be a key element in Thargoid constructions. It appears the resin can be used in various states, both to offer protection and additional strength to structures when dry, or as a lubricant in the internal systems of Thargoid bio-technology when in liquid form. When converted to a gas it is highly corrosive.',
        1644        => 'A bio-mechanical canister containing technological samples of Thargoid origin. There is widespread speculation that these are used in the construction of the various probes and ships, as well as the inner workings of their structures.',
        1645        => 'Finding the data cache from a survey mission is a rare, but often lucrative, find for explorers. These caches are constantly in demand from academic institutions and commercial interests.',
        1646        => 'Occasionally survey ships go missing during their journeys into the black. On even rarer occasions their cache of survey data can be retrieved and these are highly sought after by institutions and private interests.',
        1647        => 'A statue depicting some kind of alien figure.',
        1648        => 'This orb appears to be a mechanical device, although no one has so far deduced its purpose.',
        1649        => 'An ancient stone casket. Its purpose is not clear and it is sealed shut.',
        1650        => 'A mysterious crystal found inside an ancient obelisk. It appears to pulse with an ethereal type of energy. It is beautiful to behold, but beyond that - what secrets does it contain?',
        1651        => 'A carved tablet with ancient runes engraved upon it. Although it looks like a decorative item, it might have had another purpose.',
        1652        => 'A sealed container that some people believe to be an urn. Its contents are unknown.',
        1653        => 'Accidents in space often leave a lot of debris, some of that wreckage is useful for determining the cause of the accident. They should be handed in to whichever organisation has called for their collection, however they also generate some demand as morbid mementos or simply for scrap.',
        1654        => 'This escape pod\'s systems have been damaged and will fail by the end time provided in the briefing. After this time the system will no longer be able to sustain the life of its occupant.',
        1655        => 'Historical artefacts originating from the ancient periods of Earth. These items vary considerably in nature and hold great value to collectors.',
        1656        => 'Highly prized by collectors, the movement of recovered artefacts is strictly controlled by a number of authorities around the galaxy. Fortunately a lucrative black market offers savvy explorers with means to find reliable buyers for any ancient treasures.',
        1657        => 'A treasure trove of exquisite antique jewellery. These often contain very rare, and very valuable, pieces.',
        1658        => 'A large core filled with digital data.',
        1659        => 'Collection of DNA and other biological samples containing valuable information for the scientific community. These banks can sometimes contain samples from extinct species which vastly increases their demand.',
        1660        => 'Fossilised fragments from an unidentified life form. Inquisitive minds will revel at the chance to analyse and possess one of our galaxy\'s ancestral occupants.',
        1661        => 'This appears to be an idol crafted to worship some sort of deity or higher form of life.',
        1662        => 'Items from mankind\'s first attempts at space exploration and research.',
        1663        => 'These canisters are of historical interest and highly collectable although sometimes the contents have turned to dust with age.',
        1664        => 'Chemically augmented waste that has agricultural applications. While not overly glamorous or profitable, its one redeeming feature is a virtually inexhaustible supply.',
        1665        => 'Insectoid livestock requires specialised cargo containers to safely transport. Insectoid livestock offer extremely efficient production of materials that can be harvested from them, having low overheads and farming requirements compared to larger species. The range of goods they can service is less extensive, however.',
        1666        => '"Contains theoretical and experimental research, along with samples, the subject and contents of which are strictly prohibited by most authorities',
        1667        => 'This containment unit safely stores antimatter protecting it from gamma radiation and interaction with standard matter.',
        1668        => 'A crystal found by scanning the data core of a Guardian beacon. It appears to contain a similar ethereal type of energy as the ancient relics found at the ruin sites of the Guardian civilisation. Like the relic this item is used in guardian technologies, unlocking new data and functions. Hence it has been given the designation of Key".',

        1800        => 'A sample of bio-mechanical tissue taken from a Thargoid Interceptor-class vessel. This sample has been taken from a variant known as a Cyclops and contains both biological and mechanical elements. Tissue samples appear to be highly sought after for research purposes despite the fact that they appear to be highly corrosive.',
        1801        => 'A processing node found in the debris of a Thargoid ship. The exact function of these items is unknown, but they are thought to be integral to the flight and operational systems in all Thargoid vessels.',
        1802        => 'A sample of bio-mechanical tissue taken from a Thargoid Interceptor-class vessel. This sample has come from a variant known as a Basilisk and appears older and more developed than samples taken from the Cyclops variant, with denser biological matter and more intricate technological elements. Tissue samples appear to be highly sought after for research purposes despite the fact that they appear to be highly corrosive.',
        1803        => 'A sample of bio-mechanical tissue taken from a Thargoid Interceptor-class vessel. This sample has come from a variant known as a Medusa and appears older and more developed than samples taken from both the Cyclops and Basilisk variants, with denser biological matter and more intricate technological elements. Tissue samples appear to be highly sought after for research purposes despite the fact that they appear to be highly corrosive.',
        1804        => 'A sample of bio-mechanical tissue taken from a Thargoid Scout-class vessel. Tissue samples appear to be much sought after for research purposes, despite the fact that they appear to be highly corrosive.',
        1805        => 'A sample of bio-mechanical tissue from a Thargoid Interceptor-class vessel. This sample is from the Hydra variant, and is therefore more developed than samples from other kinds of Interceptor, with denser biological matter and more intricate technological elements. Such samples are highly sought after by scientists despite being highly corrosive.',

        1900        => 'A sample of spores from a from a space-based mollusc.',
        1901        => 'A sample of membrane from a from a space-based mollusc.',
        1902        => 'A sample of the mycelium of a space-based mollusc.',

        1920        => 'A sample of soft tissue from a space-based mollusc.',
        1921        => 'A fluid sample from a space-based mollusc.',
        1922        => 'A sample of brain tissue from a space-based mollusc.',

        1930        => 'A sample of tissue from the core of a space-based seed pod.',
        1931        => 'A sample of dead tissue from a space-based seed pod.',
        1932        => 'A sample of tissue from the surface of a space-based seed pod.',

        1940        => 'A sample of tissue from the outer layers of a space-based seed pod.',
        1941        => 'A sample of tissue from the shell of a space-based seed pod.',
        1942        => 'A sample of jelly-like tissue from a space-based seed pod.',

        1950        => 'A sample of tissue from a space-based seed pod.',

        // Powerplay (99)
        9901        => 'Used by Aisling\'s supporters to prepare systems by delivering to the desired system. They are of no value to anyone but her followers. This Item will be out of date at the end of the powerplay week.',
        9902        => 'Used by Aisling\'s supporters to gain control by delivering to systems undergoing expansion.<br />
                        <br />
                        If you are with another Imperial power you can oppose Aisling by delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9903        => 'Used by Aisling\'s supporters to fortify by delivering to the desired control system.<br />
                        <br />
                        If you are with another Imperial power you can oppose Aisling by delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9904        => 'Used by Mahon\'s supporters to prepare systems by delivering to the desired system, of little use to anyone but his followers. Otherwise it is of no value. This Item will be out of date at the end of the powerplay week',
        9905        => 'Used by Mahon\'s supporters to gain control by delivering to the desired system.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9906        => 'Used by Mahon\'s supporters to fortify control systems by delivering to his Headquarters.<br />
                        <br />
                        Otherwise it is of no value. This Item will become out of date at the end of the powerplay week.',
        9907        => 'Used by Lavigny\'s supporters to prepare systems by delivering to the desired system, of no value to any one but her followers. This Item will be out of date at the end of the powerplay week',
        9908        => 'Used to support actions in systems she is attempting to control<br />
                        <br />
                        Only of interest if you are with another Imperial power. If so you can oppose Lavigny by intercepting and delivering this cargo to one of your control systems. Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9909        => 'Used by Lavigny\'s supporters to fortify by delivering to the desired control system.<br />
                        <br />
                        If you are with another Imperial power you can oppose Lavigny by delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9910        => 'Used by Core Holding\'s supporters to prepare systems by delivering to the desired system, of no value to anyone but their followers. This Item will be out of date at the end of the powerplay week.',
        9911        => 'Used by Winters\' supporters to prepare systems by delivering to the desired system, of no value to anyone but their followers. This Item will be out of date at the end of the powerplay week.',
        9912        => 'Used by Winters\' supporters to gain control by delivering to the desired system.<br />
                        <br />
                        If you are with another federal power you can oppose Winters by delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9913        => 'Used by Winters\' supporters to fortify delivering to the desired control system.<br />
                        <br />
                        If you are with another Federal power you can oppose Winters by delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9914        => 'Used by Patreus\'s supporters to prepare systems by delivering to the desired system, it is of no value to anyone but his followers. This Item will be out of date at the end of the powerplay week.',
        9915        => 'Used to support actions in systems he is attempting to control<br />
                        <br />
                        Only of interest if you are with another Imperial power. If you are you can oppose Patreus by intercepting and delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9916        => 'Used by Patreus\'s supporters to fortify by delivering to the desired control system.<br />
                        <br />
                        If you are with another Imperial power you can oppose Patreus by delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9917        => 'Used by Hudson\'s supporters to prepare systems handing them in at one of their control systems It is of no value to anyone but Hudson\'s followers. This Item will be out of date at the end of the powerplay week',
        9918        => 'Used to support actions in systems Hudson is attempting to control<br />
                        <br />
                        Only of interest if you are with another Federal power. If you are, you can oppose Hudson by intercepting and delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9919        => 'Used by Hudson\'s supporters to fortify delivering to the desired control system.<br />
                        <br />
                        If you are with another Federal power you can oppose Hudson by delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9920        => 'Used by Li Yong-Rui\'s supporters to prepare systems by delivering to the desired system, of no value to anyone but his followers. This Item will be out of date at the end of the powerplay week.',
        9921        => 'Used by Li Yong-Rui\'s supporters to gain control by delivering to the desired system.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9922        => 'Used by Li Yong-Rui\'s supporters to fortify delivering to the desired control system.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9923        => 'Used by Torval\'s supporters to prepare systems handing them in at one of their control systems It is of no value to any one but Torval\'s followers. This Item will be out of date at the end of the powerplay week',
        9924        => 'Used by Torval\'s supporters to fortify control systems by taking them from those systems to her Headquarters.<br />
                        <br />
                        If you are with another Imperial power you can oppose Torval by delivering the Prisoners to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. Due to limited life support the contained body will not last beyond the end of the powerplay week.',
        9925        => 'Used by Utopian supporters to prepare systems by delivering to the desired system. It is of no value to anyone but their followers. Turn it in at any local security office for basic remuneration. This Item will be out of date at the end of the powerplay week.',
        9926        => 'Used to support actions in systems Utopia is attempting to control. It is on no value to anyone.',
        9927        => 'Used by Utopian supporters to fortify by taking to their Headquarters.<br />
                        <br />
                        Otherwise it is of no value. Due to limited life support the contained body will not last beyond the end of the powerplay week.',
        9928        => 'Used by Kumo Crew supporters to prepare systems by delivering to the desired system, of no value to anyone but their followers. Turn it in at any local security office for basic remuneration. This Item will be out of date at the end of the powerplay week.',
        9929        => 'Used to support actions in systems the Kumo Crew is attempting to control. It is of no value to anyone. This Item will be out of date at the end of the powerplay week.',
        9930        => 'Used by Onionhead\'s supporters to prepare systems by delivering to the desired system, it is of no value to anyone but her followers. Turn it in at any local security office for basic remuneration. This Item will be out of date at the end of the powerplay week.',
        9931        => 'Used to support actions in systems the Kumo Crew is attempting to control. It is of no value to anyone. This Item will be out of date at the end of the powerplay week.',
        9932        => 'Used by Kumo Crew supporters to fortify taking to their Headquarters.<br />
                        <br />
                        Otherwise it is of no value. Due to limited life support the contained body will not last beyond the end of the powerplay week.',
        9933        => 'Used by Torval\'s supporters to gain control by delivering to the desired system.<br />
                        <br />
                        If you are with another Imperial power you can oppose Torval by delivering this cargo to one of your control systems.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9934        => 'Used by Onionhead\'s supporters to fortify delivering to the desired control system.<br />
                        <br />
                        Otherwise it is of no value. This Item will be out of date at the end of the powerplay week.',
        9935        => 'The contents of this container are no longer of any value.',
        9936        => 'Used by Grom\'s supporters to prepare systems by delivering weapons to the desired system, so they are of no value to any one but his followers. This Item will be out of date at the end of the Powerplay week.',
        9937        => 'Used by Grom\'s supporters to fortify by delivering from the desired control system. You can oppose Grom by intercepting and delivering this cargo to one of your control systems. Otherwise it is of no value. This item will be out of date at the end of the Powerplay week.',
        9938        => 'You can oppose Grom by intercepting this cargo of Military Supplies and delivering it to one of your control systems. Otherwise it is of no value. This item will be out of date at the end of the Powerplay week.',
    ];
}