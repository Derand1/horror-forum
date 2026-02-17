using Microsoft.AspNetCore.Mvc;

namespace  MyfirstCI1.Api.Controllers;

[ApiController]
[Route("api/[controller]")]
public class WeatherController : ControllerBase
{
    [HttpGet(template:"WeatherForecast")]
    [Produces("application/json")]
    public WeatherForecast[] Get()
    {
        var forcast = Enumerable.Range(1, 5).Select(Index =>
            new WeatherForecast(
                    DateOnly.FromDateTime(DateTime.Now.AddDays(Index)), TemperatureC: Random.Shared.Next(-20, 55))
                ).ToArray();
            return forcast;
    }
}

public record WeatherForecast(DateOnly Date, int TemperatureC)
{
    public int TemperatureK = TemperatureC + 273;
}

