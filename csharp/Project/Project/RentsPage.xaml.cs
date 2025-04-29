using Project.Controller;

namespace Project;

public partial class RentsPage : ContentPage
{
	public RentsPage()
	{
		InitializeComponent();
		BindingContext = new RentsController();
	}
}