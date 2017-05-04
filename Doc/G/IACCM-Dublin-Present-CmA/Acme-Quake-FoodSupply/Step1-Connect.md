//=Acme decides to add Quake as a supplier.  They create a relationship page that lists the two of them and the terms they expect to use. The terms are the "Dublin Food Industry Common Terms" that the local merchant community keeps.  It is based on a Master Services form that we suggest could be hosted by the IACCM.

P1.=[G/U/id/acme_ie.md]

P2.=[G/U/id/quake_ie.md]

MSA.Annex.=[G/IACCM-Dublin-Present-CmA/Form/Dublin-MasterSupply-Annex.md]

MSA.=[G/IACCM-Dublin-Present-CmA/Form/FoodOrder-Agreement.md]

Order.=[G/IACCM-Dublin-Present-CmA/Form/FoodOrder-PO.md]

_P1=<a href="#" class="definedterm">Restaurant</a>

_P2=<a href="#" class="definedterm">Food Supplier</a>

_Annex=<a href="#" class="definedterm">Annex</a>

_PO=<a href="#" class="definedterm">PO</a>

_Order=<a href="#" class="definedterm">Order</a>

P1.Handle={_P1}

P2.Handle={_P2}

Model.Root={MSA.Doc}