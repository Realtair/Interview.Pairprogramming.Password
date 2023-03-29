using Microsoft.VisualStudio.TestTools.UnitTesting;

namespace PasswordValidator.MSTests;

[TestClass]
public class PasswordValidatorMsTests
{
    [TestMethod]
    public void TestValidPassword()
    {
        string password = "ValidPassword123";
        bool isValid = PasswordValidator.Validate(password);
        Assert.IsTrue(isValid);
    }

}