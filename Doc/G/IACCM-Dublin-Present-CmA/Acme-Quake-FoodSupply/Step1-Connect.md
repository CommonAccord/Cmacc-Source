//=Acme decides to add Quake as a supplier.  They create a relationship page that lists the two of them and the terms they expect to use. The terms are the "Dublin Food Industry Common Terms" that the local merchant community keeps.  It is based on a Master Services form that we suggest could be hosted by the IACCM.

P1.=[G/U/id/acme_ie.md]

P2.=[G/U/id/quake_ie.md]

_P1=<a href="#MSA.Among.Sec" class="definedterm">Restaurant</a>

_P2=<a href="#MSA.Among.Sec" class="definedterm">Food Supplier</a>

MSA._=[G/Agt-MasterService-CmA/Sec/_/MSA_Annex/0.md]

_=[G/Agt-MasterService-CmA/Sec/_/MSA_Annex/0.md]

MSA.Annex.=[G/IACCM-Dublin-Present-CmA/Form/Dublin-MasterSupply-Annex.md]

MSA.=[G/IACCM-Dublin-Present-CmA/Form/FoodOrder-Agreement.md]

Order.=[G/IACCM-Dublin-Present-CmA/Form/FoodOrder-PO.md]

P1.Handle={_P1}

P2.Handle={_P2}

ShowMe1={Order.Doc}

ShowMe2={MSA.Doc}

Model.Root={Order.Doc}<hr>{MSA.Doc}