using Xunit;

namespace PasswordValidator.XTests;

public class PasswordValidatorXTests
{
    [Fact]
    public void ValidPassword_ReturnsTrue()
    {
        string password = "";
        bool isValid = PasswordValidator.Validate(password);
        Assert.True(isValid);
    }

}