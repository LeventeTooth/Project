using Project.Controller;

namespace Project;

public partial class CarsPage : ContentPage
{
	public CarsPage()
	{
		InitializeComponent();
		BindingContext = new CarsController();
	}
}